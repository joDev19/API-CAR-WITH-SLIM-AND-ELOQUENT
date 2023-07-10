<?php
use Illuminate\Database\Eloquent\Model;
    class Categorie extends Model{
		protected $table = 'categories';
		protected $primarykey = 'categorie_id';
		protected $fillable = ['nom'];
		public $timestamps = false;
	}
