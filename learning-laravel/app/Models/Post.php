<?php
namespace App\Models;

use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class Post {
        public $id,
              $title,
              $excerpt,
              $photo,
              $date,
              $text;

        public function __construct($id, $title, $excerpt, $photo, $date, $text) {
            $this->id = $id;
            $this->title = $title;
            $this->excerpt = $excerpt;
            $this->photo = $photo;
            $this->date = $date;
            $this->text = $text;
        }

        // Get's all posts
        public static function all() {
            return cache()->remember('posts.all', now()->addMinute(), function () {
                return collect(File::files(resource_path("posts")))
                ->map(fn($file) => YamlFrontMatter::parseFile($file))
                ->map(fn($doc) => new Post(
                    $doc->id,
                    $doc->title,
                    $doc->excerpt,
                    $doc->photo,
                    $doc->date,
                    $doc->text
                ))
                ->sortByDesc('date');
            });
        }

        // Finds the file, if it doesn't exist, shows detailed an error
        public static function track($slug) {
            return static::all()->firstWhere('id', $slug);
        }

        // Finds the file, if it doesn't exist, shows an error 404
        public static function find($slug) {
            $post = static::track($slug);

            if (!$post) {
                abort(404);
            }

            return $post;
        }
    }
