<?php

namespace App\Repositories\Interface;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\UploadedFile;
use Laravel\Socialite\Contracts\User as SocialUserContract;

interface TenantRepositoryInterface extends BaseRepositoryInterface
{
    public function socialHandler(SocialUserContract $data, string $provider): Model;

    public function linkSocial(Model $model, array $data): Model;
}