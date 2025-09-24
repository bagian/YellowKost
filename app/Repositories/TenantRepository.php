<?php

namespace App\Repositories;

use App\Models\User;
use App\Models\Role;
use App\Repositories\Interface\TenantRepositoryInterface;
use App\Services\Interface\ImageServiceInterface;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Laravel\Socialite\Contracts\User as SocialUserContract;

class TenantRepository extends BaseRepository implements TenantRepositoryInterface
{
    protected $imageService;

    public function __construct(ImageServiceInterface $imageService) {
        parent::__construct();

        $this->imageService = $imageService;
    }

    protected function getModelClass() {
        return User::class;
    }

    public function all(): Collection {
        return $this->model::all();
    }

    public function find($id): Model {
        return $this->model::find($id);
    }

    public function create(array $data): Model {
        return $this->transaction(callback: function() use ($data) {
            $user = new User();

            if (isset($data['ktp'])) {
                $name = "ktp_{$data['full_name']}";
                $data['ktp'] = $this->imageService->save($data['ktp'], 'ktp', $name);
            }

            if (isset($data['profile_picture']) && $data['avatar_type'] == 'storage') {
                $name = "avatar_{$data['full_name']}";
                $data['profile_picture'] = $this->imageService->save($data['profile_picture'], 'avatar', $name);
            }

            $user = $this->fillModel($user, $data);

            $user->save();

            return $user;
        });
    }

    public function update(Model $model, array $data): Model {
        return $this->transaction(callback: function() use($model, $data) {
            if (isset($data['ktp'])) {
                $name = "ktp_{$data['full_name']}";
                $data['ktp'] = $this->imageService->save($data['ktp'], 'ktp', $name);
            }

            if (isset($data['profile_picture']) && $data['avatar_type'] == 'storage') {
                $name = "avatar_{$data['full_name']}";
                $data['profile_picture'] = $this->imageService->save($data['profile_picture'], 'avatar', $name);
            }

            $model = $this->fillModel($model, $data) ;

            $model->save();

            return $model;
        });
    }

    public function delete(Model $model): Model {
        $deleted['ktp'] = $this->imageService->delete($model->ktp);
        $deleted['profile_picture'] = $this->imageService->delete($model->profile_picture);

        $model->delete();

        $model->deleted = $deleted;

        return $model;
    }

    public function socialHandler(SocialUserContract $userContract, string $provider): Model {
        $user = User::where('social_id', $userContract->getId())
            ->where('provider', $provider)
            ->first();

        if (!$user) {
            $user = User::where('email', $userContract->getEmail())->first();

            if ($user) {
                $data['social_id '] = $userContract->getId();
                $data['provider'] = $provider;
                $data['auth_method'] = "social";

                $user = $this->linkSocial($user, $data);
            } else {
                $data['id_role'] = Role::where('slug', 'user')->value('id');
                $data['name'] = $userContract->getName();
                $data['email'] = $userContract->getEmail();
                $data['social_id'] = $userContract->getId();
                $data['provider'] = $provider;
                $data['avatar_type'] = 'url';
                $data['profile_picture'] = $userContract->getAvatar();
                $data['auth_method'] = 'social';

                $user = $this->create($data);
            }
        }

        return $user;
    }

    public function linkSocial(Model $model, array $data): Model {
        return $this->transaction(callback: function() use($model, $data) {
            $model = $this->fillModel($model, $data);

            $model->save();

            return $model;
        });
    }
}