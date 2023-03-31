<?php

namespace App\Services\Admin;

use App\Models\Banner;
use App\Services\Service;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;

class BannerService extends Service
{
    /**
     * Get List Banners
     *
     * @return Builder[]|Collection
     */
    public function getListBanners(): Collection|array
    {
        return Banner::query()
            ->select(['id', 'title', 'image', 'link', 'status'])
            ->get();
    }

    /**
     * Delete
     *
     * @param $id
     */
    public function delete($id)
    {
        $banner = Banner::query()->where('id', $id)->first();
        if (!$banner) {
            abort(404);
        }//end if

        $banner->delete();
    }
}
