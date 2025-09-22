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
    }

    public function update(Model $model, array $data): Model {
    }

    public function delete(Model $model): Model {
    }

    public function socialHandler(SocialUserContract $data, string $provider): Model {
        return $this->transaction(callback: function() use ($data, $provider) {
            $user = User::where('social_id', $data->getId())
                ->where('provider', $provider)
                ->first();
    
            if (!$user) {
                $user = User::where('email', $data->getEmail())->first();
    
                if ($user) {
                    $user->social_id = $data->getId();
                    $user->provider = $provider;
                    $user->auth_method = "social";

                    $user->save();
                } else {
                    $user = $this->createSocial($data, $provider);
                }
            }
    
            return $user;
        });
    }

    public function createSocial(SocialUserContract $data, string $provider): Model {
        return $this->transaction(callback: function() use ($data, $provider): Model {
            $user = new User();

            $user->id_role = Role::where('slug', 'user')->value('id');
            $user->name = $data->getName();
            $user->email = $data->getEmail();
            $user->social_id = $data->getId();
            $user->provider = $provider;
            $user->avatar_type = 'url';
            $user->profile_picture = $data->getAvatar();
            $user->auth_method = 'social';

            $user->save();

            return $user;
        });
    }
}