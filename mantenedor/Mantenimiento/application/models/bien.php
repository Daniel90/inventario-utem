<?php
	class Bien extends Eloquent
	{
		public static $table = 'bienes';
		public function centros()
		{
			return $this->belongs_to('Centrocostos');
		}
	}
?>
