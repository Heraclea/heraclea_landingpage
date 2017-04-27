<?php
Class Home_model extends CI_Model {

	function get_banner($language) {
		if ($language == 'es') {
			$this->db->select('id, titulo_text as title_text, subtitulo_text as subtitle_text, texto_boton_text as 	text_button_text, link_boton_select, poster_file, video_mp4_file, video_webm_file, video_ogv_file');
		}else{
			$this->db->select('id, title_text, subtitle_text, text_button_text, link_boton_select, poster_file, video_mp4_file, video_webm_file, video_ogv_file');
		}
		
		$this->db->from('banner');
		$query = $this->db->get();
		return $query->row();
	}

	function get_about($language) {
		if ($language == 'es') {
			$this->db->select('id, titulo_text as title_text, subtitulo_text as subtitle_text, descripcion_textarea as 	description_textarea, caracteristicas_list as features_list');
		}else{
			$this->db->select('id, title_text, subtitle_text, description_textarea, features_list');
		}
		$this->db->from('nosotros');
		$query = $this->db->get();
		return $query->row();
	}

	function get_numbers($language) {
		if ($language == 'es') {
			$this->db->select('id, nombre_text as name_text, valor_text');
		}else{
			$this->db->select('id, name_text, valor_text');
		}
		$this->db->from('cifras');
		$query = $this->db->get();
		return $query->result();
	}

	function get_services($language) {
		if ($language == 'es') {
			$this->db->select('id, titulo_text as title_text, subtitulo_text as subtitle_text');
		}else{
			$this->db->select('id, title_text, subtitle_text');
		}
		$this->db->from('servicios');
		$query = $this->db->get();
		return $query->row();
	}

	function get_list_services($language) {
		if ($language == 'es') {
			$this->db->select('id, titulo_text as title_text, descripcion_textarea as description_textarea, icono_text');
		}else{
			$this->db->select('id, title_text, description_textarea, icono_text');
		}
		$this->db->from('lista_de_servicios');
		$this->db->order_by('record_order');
		$query = $this->db->get();
		return $query->result();
	}

	function get_portfolio($language) {
		if ($language == 'es') {
			$this->db->select('id, titulo_text as title_text, subtitulo_text as subtitle_text, texto_boton_text as text_button_text, texto_boton_hover_text as text_button_hover_text');
		}else{
			$this->db->select('id, title_text, subtitle_text, text_button_text, text_button_hover_text');
		}
		$this->db->from('portafolio');
		$query = $this->db->get();
		return $query->row();
	}

	function get_categories_portfolio($language) {
		if ($language == 'es') {
			$this->db->select('id, nombre_text as name_text, icono_text');
		}else{
			$this->db->select('id, name_text, icono_text');
		}
		$this->db->from('categorias_del_portafolio');
		$query = $this->db->get();
		return $query->result();
	}

	function get_items_portfolio($language) {
		if ($language == 'es') {
			$this->db->select('id, titulo_text as title_text, descripcion_textarea as description_textarea, link_text, imagen_file, link_video_text, categorias_del_portafolio_relation');
		}else{
			$this->db->select('id, title_text, description_textarea, link_text, link_video_text, imagen_file, categorias_del_portafolio_relation');
		}
		$this->db->from('proyectos_del_portafolio');
		$query = $this->db->get();
		return $query->result();
	}

	function get_process($language) {
		if ($language == 'es') {
			$this->db->select('id, titulo_text as title_text, subtitulo_text as subtitle_text');
		}else{
			$this->db->select('id, title_text, subtitle_text');
		}
		$this->db->from('proceso');
		$query = $this->db->get();
		return $query->row();
	}

	function get_items_process($language) {
		if ($language == 'es') {
			$this->db->select('id, titulo_text as title_text, descripcion_textarea as description_textarea, icono_text');
		}else{
			$this->db->select('id, title_text, description_textarea, icono_text');
		}
		$this->db->from('items_del_proceso');
		$this->db->order_by('record_order');
		$query = $this->db->get();
		return $query->result();
	}

	function get_team($language) {
		if ($language == 'es') {
			$this->db->select('id, titulo_text as title_text, subtitulo_text as subtitle_text, descripcion_textarea as description_textarea');
		}else{
			$this->db->select('id, title_text, subtitle_text, description_textarea');
		}
		$this->db->from('equipo');
		$query = $this->db->get();
		return $query->row();
	}

	function get_items_team($language) {
		if ($language == 'es') {
			$this->db->select('id, nombre_text, cargo_text as position_text, titulo_text as title_text, frase_textarea as slogan_textarea, imagen_file, habilidades_list as skills_list, link_facebook_text, link_twitter_text');
		}else{
			$this->db->select('id, nombre_text, position_text, slogan_textarea, title_text, imagen_file, skills_list, link_facebook_text, link_twitter_text');
		}
		$this->db->from('miembros_del_equipo');
		$this->db->order_by('record_order');
		$query = $this->db->get();
		return $query->result();
	}

	function get_clients($language) {
		if ($language == 'es') {
			$this->db->select('id, titulo_text as title_text, subtitulo_text as subtitle_text, imagen_de_fondo_file');
		}else{
			$this->db->select('id, title_text, subtitle_text, imagen_de_fondo_file');
		}
		$this->db->from('clientes');
		$query = $this->db->get();
		return $query->row();
	}

	function get_items_clients($language) {
		if ($language == 'es') {
			$this->db->select('id, testimonio_textarea as testimony_textarea, nombre_de_la_persona_text, empresa_text');
		}else{
			$this->db->select('id, testimony_textarea, nombre_de_la_persona_text, empresa_text');
		}
		$this->db->from('testimonios');
		$this->db->order_by('record_order');
		$query = $this->db->get();
		return $query->result();
	}

	function get_items_brands($language) {
		$this->db->select('id, imagen_file, link_text');
	
		$this->db->from('marcas');
		$this->db->order_by('record_order');
		$query = $this->db->get();
		return $query->result();
	}

	function get_contact($language) {
		if ($language == 'es') {
			$this->db->select('id, titulo_text as title_text, subtitulo_text as subtitle_text, telefono_1_text, telefono_2_text, email_text');
		}else{
			$this->db->select('id, title_text, subtitle_text, telefono_1_text, telefono_2_text, email_text');
		}
		$this->db->from('contacto');
		$query = $this->db->get();
		return $query->row();
	}

	function get_footer() {
		$this->db->select('*');
		
		$this->db->from('footer');
		$query = $this->db->get();
		return $query->row();
	}

	function get_header_blog($language){
		if ($language == 'es') {
			$this->db->select('id, subtitulo_home_text as subtitle_home_text, titulo_home_text as title_home_text, titulo_interno_text as internal_title_text, subtitulo_interno_text as internal_subtitle_text, imagen_de_fondo_file');
		}else{
			$this->db->select('id, subtitle_home_text, title_home_text, internal_title_text, internal_subtitle_text, imagen_de_fondo_file');
		}
		
		$this->db->from('blog');
		$query = $this->db->get();
		return $query->row();
	}

	function get_featured_blog($language) {
		if ($language == 'es') {
			$this->db->select('id, titulo_text as title_text, descripcion_corta_textarea as short_description_textarea, imagen_file, destacado_radio, activo_radio, updated_at, created_at');
		}else{
			$this->db->select('id, title_text, short_description_textarea, imagen_file, destacado_radio, activo_radio, updated_at, created_at');
		}
		
		$this->db->from('articulos_del_blog');
		$this->db->order_by('updated_at', 'DESC');
		$this->db->where('activo_radio', 'Si');
		$this->db->where('destacado_radio', 'Si');
		$this->db->limit(2);
		$query = $this->db->get();
		return $query->result();
	}

	function get_blog($language, $limit, $start) {
		if ($language == 'es') {
			$this->db->select('id, titulo_text as title_text, descripcion_corta_textarea as short_description_textarea, imagen_file, destacado_radio, activo_radio, updated_at, created_at');
		}else{
			$this->db->select('id, title_text, short_description_textarea, imagen_file, destacado_radio, activo_radio, updated_at, created_at');
		}
		
		$this->db->from('articulos_del_blog');
		$this->db->order_by('updated_at', 'DESC');
		$this->db->where('activo_radio', 'Si');

		if (!is_null($start))
			$this->db->limit($limit, $start);
		
		$query = $this->db->get();
		return $query->result();
	}

	function get_post($language, $id) {
		if ($language == 'es') {
			$this->db->select('id, titulo_text as title_text, descripcion_textarea as description_textarea, imagen_file, imagen_background_file, destacado_radio, activo_radio, updated_at, created_at');
		}else{
			$this->db->select('id, title_text, description_textarea, imagen_file, imagen_background_file,destacado_radio, activo_radio, updated_at, created_at');
		}
		
		$this->db->from('articulos_del_blog');
		$this->db->where('id', $id);
		$query = $this->db->get();
		return $query->row();
	}

	function get_post_preview($language, $id) {
		if ($language == 'es') {
			$this->db->select('id, titulo_text as title_text, descripcion_textarea as description_textarea, imagen_file, imagen_background_file, destacado_radio, activo_radio, updated_at, created_at');
		}else{
			$this->db->select('id, title_text, description_textarea, imagen_file, imagen_background_file,destacado_radio, activo_radio, updated_at, created_at');
		}
		
		$this->db->from('articulos_del_blog');
		$this->db->where('id<', $id);
		$this->db->limit(1);
		$query = $this->db->get();
		return $query->row();
	}

	function get_post_next($language, $id) {
		if ($language == 'es') {
			$this->db->select('id, titulo_text as title_text, descripcion_textarea as description_textarea, imagen_file, imagen_background_file, destacado_radio, activo_radio, updated_at, created_at');
		}else{
			$this->db->select('id, title_text, description_textarea, imagen_file, imagen_background_file,destacado_radio, activo_radio, updated_at, created_at');
		}
		
		$this->db->from('articulos_del_blog');
		$this->db->where('id >',$id);
		$this->db->limit(1);
		$query = $this->db->get();
		return $query->row();
	}

	function get_seo() {
		$this->db->select('*');
		$this->db->from('configuration');
		$this->db->where('id', 1);
		$query = $this->db->get();
		return $query->row();
	}
}