<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->float('price');
            $table->float('tva');
            $table->string('image1');
            $table->string('image2');
            $table->string('image3');
            $table->string('image4');
            $table->string('video');
            $table->longText('description');
            $table->string('pdf');
            $table->unsignedInteger('stock');
            $table->float('weight');
            $table->float('delivery');
            $table->string('category');
            $table->unsignedInteger('brand_id');
            $table->unsignedInteger('promo_id');
            $table->timestamps();
        });

        Schema::table('product', function (Blueprint $table) {
            $table->foreign('brand_id')->references('id')->on('brand');
        });

        Schema::table('product', function (Blueprint $table) {
            $table->foreign('promo_id')->references('id')->on('promo');
        });


        DB::table('product')->insert([
            'name' =>'Aerogarden',
            'price' =>'189',
            'tva' => '1.2',
            'image1' =>'img/aerogarden/aerogarden-01.jpg',
            'image2' =>'img/aerogarden/aerogarden-02.jpg',
            'image3' =>'img/aerogarden/aerogarden-03.jpeg ',
            'image4' =>'img/aerogarden/aerogarden-04.jpeg',
            'video' =>'https://www.youtube.com/embed/NnUFlagDwZA',
            'description' =>'Jardin de l’année avec le AeroGarden Mircale-Gro. Faites pousser des plantes fraiches, des légumes, des sales vertes, des fleurs et bien plus ! Le AeroGarden est un système de jardinage en intérieur sans sol qui fait pousser des plantes 5 fois plus rapidement que dans le sol.',
            'pdf' =>'https://www.aerogarden.com/media/wysiwyg/kbase/QSG_AG_Bounty-BountyElite_EU_20170929_NoCrop.pdf',
            'stock'=>'32',
            'weight' =>'20',
            'delivery' => '6.9',
            'category' =>'Nourriture',
            'brand_id' =>'1',
            'promo_id' =>'1',
            'created_at'  => Carbon::today(),
            'updated_at'  => Carbon::today()

        ]);

        DB::table('product')->insert([
            'name' =>'Altered',
            'price' =>'39',
            'tva' => '1.2',
            'image1' =>'img/altered/altered-01.jpg',
            'image2' =>' ',
            'image3' =>' ',
            'image4' =>' ',
            'video' =>' ',
            'description' =>'Altered permet d’économiser de l’énergie et des ressources afin que vous n’ayez pas à le faire. Optimiser votre consommation d\\\'énergie et d\\\'eau automatiquement.. ',
            'pdf' =>' ',
            'stock'=>'10',
            'weight' =>'10',
            'delivery' => '6.9',
            'category' =>'Electricité',
            'brand_id' =>'2',
            'promo_id' =>'1',
            'created_at'  => Carbon::today(),
            'updated_at'  => Carbon::today()

        ]);

        DB::table('product')->insert([
            'name' =>'Bob',
            'price' =>'150',
            'tva' => '1.2',
            'image1' =>'img/bob/bob-noir.jpg ',
            'image2' =>' ',
            'image3' =>' ',
            'image4' =>' ',
            'video' =>' ',
            'description' =>' Laissez-vous surprendre par le lave-vaisselle le plus avancé au monde. Avec son réservoir intégré, Bob est le premier lave-vaisselle autonome et ultra-compact . Il ne consomme que 0.35kWh par cycle et n’utilise que 3 litres d’eau par cycle, soit 5 fois moins qu’un lavage à la main.',
            'pdf' =>' ',
            'stock'=>'10',
            'weight' =>'10',
            'delivery' => '6.9',
            'category' =>'Eau',
            'brand_id' =>'3',
            'promo_id' =>'1',
            'created_at'  => Carbon::today(),
            'updated_at'  => Carbon::today()

        ]);

        DB::table('product')->insert([
            'name' =>'Nebia',
            'price' =>'1149',
            'tva' => '1.2',
            'image1' =>'img/nebia/nebia-noir.jpg',
            'image2' =>' ',
            'image3' =>' ',
            'image4' =>' ',
            'video' =>' ',
            'description' =>'La prochaine évolution de la douche: plus de chaleur, plus de puissance, plus de couverture. Permet d\\\'économiser jusqu\\\'à  65% d\\\'eau grâce à son système révolutionnaire.',
            'pdf' =>' ',
            'stock'=>'10',
            'weight' =>'20',
            'delivery' => '6.9',
            'category' =>'Eau',
            'brand_id' =>'4',
            'promo_id' =>'1',
            'created_at'  => Carbon::today(),
            'updated_at'  => Carbon::today()

        ]);

        DB::table('product')->insert([
            'name' =>'Nest',
            'price' =>'210',
            'tva' => '1.2',
            'image1' =>'img/nest/nest-01.jpg',
            'image2' =>' ',
            'image3' =>' ',
            'image4' =>' ',
            'video' =>' ',
            'description' =>'Élégant, il vous fournit une température agréable et vous aide à faire des économies d\\\'énergie et contrôle la production d\\\'eau chaude. Ce thermostat contrôle 60 % de vos factures énergétiques, ce qui en plus d\\\'être écologique devrait vous aider à réaliser des économies !',
            'pdf' =>' ',
            'stock'=>'35',
            'weight' =>'2',
            'delivery' => '6.9',
            'category' =>'Electricité',
            'brand_id' =>'5',
            'promo_id' => '1',
            'created_at'  => Carbon::today(),
            'updated_at'  => Carbon::today()

        ]);

        DB::table('product')->insert([
            'name' =>'Qrad',
            'price' =>'329',
            'tva' => '1.2',
            'image1' =>'img/qrad/qrad-03.jpg',
            'image2' =>' ',
            'image3' =>' ',
            'image4' =>' ',
            'video' =>' ',
            'description' =>'le QH-1, le premier radiateur-ordinateur dont la chaleur provient de micro-processeurs embarqués, connectés à internet, qui réalisent à distance des calculs informatiques pour des entreprises tierces. La solution Qarnot réduit considérablement l’empreinte carbone des cacluls informatiques.',
            'pdf' =>' ',
            'stock'=>'25',
            'weight' =>'17',
            'delivery' => '6.9',
            'category' =>'Electricité',
            'brand_id' =>'6',
            'promo_id' =>'1',
            'created_at'  => Carbon::today(),
            'updated_at'  => Carbon::today()

        ]);

        DB::table('product')->insert([
            'name' =>'Solargaps',
            'price' =>'179',
            'tva' => '1.2',
            'image1' =>'img/solargaps/solargap-01.jpg',
            'image2' =>' ',
            'image3' =>' ',
            'image4' =>' ',
            'video' =>' ',
            'description' =>'Ces stores intelligents suivent automatiquement le soleil et sont facilement contrôlablent grâce à votre smartphone, Google Home et Amazon Alexa.',
            'pdf' =>' ',
            'stock'=>'14',
            'weight' =>'6',
            'delivery' => '6.9',
            'category' =>'Electricité',
            'brand_id' =>'7',
            'promo_id' =>'1',
            'created_at'  => Carbon::today(),
            'updated_at'  => Carbon::today()

        ]);

        DB::table('product')->insert([
            'name' =>'Towergarden',
            'price' =>'250',
            'tva' => '1.2',
            'image1' =>'img/towergarden/towergarden-01.jpg',
            'image2' =>'',
            'image3' =>'',
            'image4' =>'',
            'video' =>'',
            'description' =>'Tours aéroponiques permettants de faire pousser des fruits, des légumes, des herbes fines, ou des fleurs en utilisant 95 % moins d’eau par rapport aux cultures en terre.',
            'pdf' =>'',
            'stock'=>'27',
            'weight' =>'58',
            'delivery' => '6.9',
            'category' =>'Nourriture',
            'brand_id' =>'8',
            'promo_id'=>'1',
            'created_at'  => Carbon::today(),
            'updated_at'  => Carbon::today()

        ]);

        DB::table('product')->insert([
            'name' =>'Zera',
            'price' =>'200',
            'tva' => '1.2',
            'image1' =>'img/zera/zera-01.jpg',
            'image2' =>' ',
            'image3' =>' ',
            'image4' =>' ',
            'video' =>' ',
            'description' =>'Composter depuis sa cuisine, c\\\'est désormais possible ! Cet objet cache un ingénieux système capable d\\\'accélérer le processus de façon spectaculaire. Zera élimine les déchets en seulement 24h et de manière écologique',
            'pdf' =>'',
            'stock'=>'24',
            'weight' =>'18',
            'delivery' => '6.9',
            'category' =>'Nourriture',
            'brand_id' =>'9',
            'promo_id' =>'1',
            'created_at'  => Carbon::today(),
            'updated_at'  => Carbon::today()

        ]);
   }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product');
    }


}
