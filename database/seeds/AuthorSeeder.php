<?php

use Illuminate\Database\Seeder;
use App\Author;
use App\Authors_detail;
use App\Post;
use Faker\Generator as Faker;
class AuthorSeeder extends Seeder

{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
      for($i=0; $i<20; $i++){
        //Author
        $author = new Author();
        $author->name = $faker->name();
        $author->email = $faker->email();
        $author->save();

        // Author details
        $authors_detail = new Authors_detail();
        $authors_detail->phone = $faker->text(10);
        $authors_detail->address = $faker->text(40);
        $authors_detail->avatar = 'https://picsum.photos/seed/' . rand(100,999)  .'/200/300';
        // Salva quanto creato dentro author
        //, utilizzando il metodo details definito in Model
        $author->details()->save($authors_detail);

        for($k=0; $k<rand(2,5); $k++){
          // Post details
          $post = new Post();
          $post->title= $faker->word();
          $post->body=  $faker->text(320);
          // Salva quanto creato dentro author
          //, utilizzando il metodo posts definito in Model
          $author->posts()->save($post);
        }
      }
    }
}
