<?php

class Style_generic extends BlinkFW_Style {

	public function getCourseIndex ($course, $only_index = true, $idGroup = null, $editar = false) {
		$usuario = BlinkFactory::getUser();

		// index Base
		$obj = parent::getCourseIndex($course, $only_index, $idGroup, $editar);
		$obj->portada = $course->getIDCourseIndex();

		return $obj;
	}

	/*
	 * Evalúa si el estilo permite el menú lateral
	 * @return Bool
 	*/
    public function showBookIndexInClass($clase) {
	    return true;
	}
}
