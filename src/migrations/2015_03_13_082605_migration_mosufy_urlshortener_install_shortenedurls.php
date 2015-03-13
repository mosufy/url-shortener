<?php
/**
 * Part of the UrlShortener package.
 *
 * NOTICE OF LICENSE
 *
 * Licensed under MIT License.
 *
 * @package    UrlShortener
 * @version    0.1.0
 * @author     Mohd Sufiyan
 * @license    MIT
 * @copyright  (c) 2015, Mohd Sufiyan
 * @link       http://mosufy.com
 */

use Illuminate\Database\Migrations\Migration;

class MigrationMosufyUrlshortenerInstallShortenedurls extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shortenedurls', function($table)
        {
            $table->increments('id');
            $table->string('url');
            $table->string('actual_url');
            $table->timestamps();

            // We'll need to ensure that MySQL uses the InnoDB engine to
            // support the indexes, other engines aren't affected.
            $table->engine = 'InnoDB';
            $table->unique('url');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('shortenedurls');
    }

}
