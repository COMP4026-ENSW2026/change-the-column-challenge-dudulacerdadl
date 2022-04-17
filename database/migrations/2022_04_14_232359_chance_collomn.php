<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChanceCollomn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pets', function (Blueprint $table) {
            $affected = DB::table('pets')
                ->where('specie','bunny')
                ->update(
                    ['specie'=>'coelho']
                );
            $affected = DB::table('pets')
                ->whereIn('specie',['mamba','mamba-negra'])
                ->update(
                    ['specie'=>'cobra']
                );
            $affected = DB::table('pets')
                ->whereIn('specie',['pikachu','bulbasauro','squirtle'])
                ->update(
                    ['specie'=>'pokemon']
                );
            $affected = DB::table('pets')
                ->whereIn('specie',['dragao de komodo','dragão de komodo'])
                ->update(
                    ['specie'=>'dragao-de-komodo']
                );
            $affected = DB::table('pets')
                ->whereIn('specie',['papagaio','periquito'])
                ->update(
                    ['specie'=>'ave']
                );
            $affected = DB::table('pets')
                ->where('specie','dog')
                ->update(
                    ['specie'=>'cachorro']
                );
            
            $affected = DB::table('pets')
                ->whereIn('size',['SM','small'])
                ->update(
                    ['size'=>'sm']
                );
            $affected = DB::table('pets')
                ->whereIn('size',['large','L'])
                ->update(
                    ['size'=>'l']
                );
            $affected = DB::table('pets')
                ->whereIn('size',['medium','M'])
                ->update(
                    ['size'=>'m']
                );
        }); 

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
