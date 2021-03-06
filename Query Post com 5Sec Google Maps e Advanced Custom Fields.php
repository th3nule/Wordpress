<?php
// Utilize este código com o Advanced Custom Fields.
// Código feito para imprimir um shortode com vários códigos dentro.
// Código criado para o plugin - http://5sec-google-maps-pro.webfactoryltd.com/

// Com FOR
$terms = get_field('cidades_de_atuacao'); 
$conte = count($terms);
$shortcode = '[map width="100%" height="350px"]';
for ($i=1; $i < $conte; $i++){
$shortcode .=
'[pin]'.$cidades = $terms[$i]->name.' - MG[/pin]';
}
$shortcode .= '[/map]';
echo do_shortcode( $shortcode );

// Com Foreach
$terms = get_field('cidades_de_atuacao'); 
$shortcode = '[map width="100%" height="350px"]';
foreach( $terms as $term ):
$shortcode .=
'[pin]'.$term->name.' - MG[/pin]';
endforeach;
$shortcode .= '[/map]';
echo do_shortcode( $shortcode );
?>
