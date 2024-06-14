<?php

namespace App\Filament\Resources\MessageResource\Api\Handlers;

use App\Filament\Resources\MessageResource;
use Illuminate\Http\Request;
use Rupadana\ApiService\Http\Handlers;

class MessageHandler extends Handlers
{
    public static ?string $uri = '/';

    public static ?string $resource = MessageResource::class;

    public static function getMethod()
    {
        return Handlers::POST;
    }

    public static function getModel()
    {
        return static::$resource::getModel();
    }

    public function handler(Request $request)
    {
        $model = new (static::getModel());

        $model->fill($request->all());

        $model->save();

        return static::sendSuccessResponse($model, 'Successfully Create Resource');
    }
}
