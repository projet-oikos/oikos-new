<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CreateReviewTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('review', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->mediumText('review');
            $table->dateTime('date');
            $table->unsignedInteger('note');
            $table->unsignedInteger('product_id');
            $table->unsignedInteger('customer_id');
            $table->timestamps();
        });
        Schema::table('review', function (Blueprint $table) {
            $table->foreign('product_id')->references('id')->on('product');
            $table->foreign('customer_id')->references('id')->on('customer');
        });

        DB::table('review')->insert([
            'review' => 'Cela fait quelques semaines que j’ai acheté l’Aerogarden, parce que je suis fou de cuisine faisant appel à des herbes (vraiment) fraîches. J’ai installé l’appareil en cinq minutes, malgré que je sois peu habile. C’est sympa de voir pousser ses plantes chaque jour. J’ai déjà utilisé les herbes dans différents repas. Elles sont beaucoup plus goûteuses que celles achetés en barquette au supermarché. J’ai préparé un pesto délicieusement frais à base de basilic. Je suis très content de mon Aerogarden et je le conseille à tout le monde.',
            'date' => Carbon::today(),
            'note' => '3',
            'product_id' =>'1',
            'customer_id' =>'1',
            'created_at'  => Carbon::today(),
            'updated_at'  => Carbon::today()
        ]);

              DB::table('review')->insert([
                  'review' => 'Les + : -Bon lavage et séchage. -Silencieux sauf si l option VarioSpeedPlus est activée. -Bonne modularité de l agencement intérieur. -Utilisation très simple. Les - : -Le plastique du bandeau fait un peu  cheap . -Pas d option de lavage renforcé pour le panier inférieur, mais cela reste suffisant pour des casseroles pas trop sales. -Fond de cuve en plastique : odeur de plastique chaud lors des 5 ou 6 premières utilisations. Tenue dans le temps par rapport à de l inox ? ',
                  'date' => Carbon::today(),
                  'note' => '4',
                  'product_id' =>'2',
                  'customer_id' =>'2',
                  'created_at'  => Carbon::today(),
                  'updated_at'  => Carbon::today()
              ]);

        DB::table('review')->insert([
            'review' => 'Ça réduit drastiquement la pression peu importe la position. En soit, c’est le but, pour économiser de l’eau, mais il arrive que vous ayez besoin d’un certain débit, et là le seul moyen, c’est d’enlever cet embout.\r\nEn bref, bien qu’efficace, cela manque de praticité',
            'date' => Carbon::today(),
            'note' => '4',
            'product_id' =>'3',
            'customer_id' =>'3',
            'created_at'  => Carbon::today(),
            'updated_at'  => Carbon::today()
        ]);

        DB::table('review')->insert([
            'review' => 'Ce produit a beaucoup d avantages mais des inconvénients importants. Ma maison a un système de pression constante réglé à 70 psi, un recirculateur d eau chaude sur une minuterie et une température de chauffe-eau de 125, supérieure à celle que je préférerais mais nécessaire pour rester au chaud avec cette douche. Le système s’est installé facilement et les instructions ont été sensées. La tête glisse facilement de haut en bas et mon souci majeur, obtenir un shampooing de cheveux plus épais, n est tout simplement pas un problème - la douche fonctionne très bien pour cela (notez que j ai utilisé le mode de débit plus élevé).',
            'date' => Carbon::today(),
            'note' => '3',
            'product_id' =>'4',
            'customer_id' =>'4',
            'created_at'  => Carbon::today(),
            'updated_at'  => Carbon::today()
        ]);

        DB::table('review')->insert([
            'review' => 'Nest n’est pas un simple gadget. Grâce à ses options et caractéristiques nouvelles, ce thermostat connecté permet aux utilisateurs et utilisatrices de faire des économies d’énergie, mais aussi par la même occasion de faire un geste pour l’environnement. Prix, avantages, spécificités et accessibilité.',
            'date' => Carbon::today(),
            'note' => '5',
            'product_id' =>'5',
            'customer_id' =>'5',
            'created_at'  => Carbon::today(),
            'updated_at'  => Carbon::today()
        ]);

        DB::table('review')->insert([
            'review' => 'Les ordinateurs en fonctionnement émettent de la chaleur. C’est de ce constat qu’est parti Paul Benoit, ingénieur informatique et polytechnicien, pour créer Qarnot Computing. Par le biais de sa jeune société, il commence à commercialiser en 2010 des « radiateurs-ordinateurs » qui exploitent la chaleur dégagée pour la réinjecter dans un circuit de chauffage',
            'date' => Carbon::today(),
            'note' => '4',
            'product_id' =>'6',
            'customer_id' =>'6',
            'created_at'  => Carbon::today(),
            'updated_at'  => Carbon::today()
        ]);

        DB::table('review')->insert([
            'review' => 'J\'ai reçu ma latte. Il semble s agir d\'un panneau solaire de haute qualité, qui charge rapidement mon ordinateur portable / téléphone . \r\n L’idée générale des batteries solaires est géniale, mais peu d’entreprises proposent des produits vraiment qualitatifs - j’avais déjà jeté plusieurs batteries solaires chinoises pour téléphones, lampes de jardin solaires, lampes de Noël solaires, mais SolarGaps fonctionne sans aucun problème ni dysfonctionnement tout ce temps!Recommande totalement SolarGaps à tout le monde et souhaite maintenant obtenir les blinds !!!Je me sens comme au Texas Les stores solaires sont un must :)\r\n Merci SolarGaps!',
            'date' => Carbon::today(),
            'note' => '3',
            'product_id' =>'7',
            'customer_id' =>'7',
            'created_at'  => Carbon::today(),
            'updated_at'  => Carbon::today()
        ]);

        DB::table('review')->insert([
            'review' => ' J\'en ai 2 et j\'utilise l\'original depuis 4 ans. J\'ai presque tout cultivé, des tomates et de la laitue aux poivrons, courges, fleurs, concombres et cantaloup. Je cultive aussi dans des conteneurs et un jardin de terre. Le jardin de la tour produit toujours la croissance la plus importante et la plus rapide. Pendant l’été, j’achète très peu de produits et je cultive suffisamment d’herbes pour faire des cadeaux à des dizaines de personnes à Noël. Le regarder grandir est tellement amusant et satisfaisant. Je ne peux pas imaginer ne pas les avoir!',
            'date' => Carbon::today(),
            'note' => '4',
            'product_id' =>'8',
            'customer_id' =>'8',
            'created_at'  => Carbon::today(),
            'updated_at'  => Carbon::today()
        ]);

        DB::table('review')->insert([
            'review' => 'ZERA Comme les restes de nourriture ont été ajoutés sur une semaine, il est tout à fait possible que le processus de recyclage ne dure que 24 heures. Les additifs sont la fibre de coco et le bicarbonate de soude pour fournir du fourrage grossier et accélérer le processus de compostage, ce qui est logique.',
            'date' => Carbon::today(),
            'note' => '5',
            'product_id' =>'9',
            'customer_id' =>'9',
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
        Schema::dropIfExists('review');
    }
}
