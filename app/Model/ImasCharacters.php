<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ImasCharacters extends Model
{
    protected $table = 'imas_voice_actors';
    protected $primaryKey = 'id';

    /**
     * アイマス声優のリスト全件を返す
     *
     * @return bool
     */
    public function getVoiceActors() {
        return $this->get();
    }
}