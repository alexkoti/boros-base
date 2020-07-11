<?php get_header(); ?>

<?php
$aaa = array(
    'foo' => 'bar',
    'lorem' => 'ipsum',
);
pre( $aaa, 'args' );
pre( $aaa, 'args', false );
pal( 'pal', 'alerta' );
pal( 'pal str_pad', 'alerta', 20 );
pal( 'pal str_pad', 'dolorsitamet', 20 );
pal( 'pal str_pad', 'loremipsum', 20 );

pam( 'lorem ipsum dolor sit', 'primary', 'Primary', true );
pam( 'lorem ipsum dolor sit', 'warning', 'Warning', true );
pam( 'lorem ipsum dolor sit', 'danger', 'Danger', true );
pam( 'lorem ipsum dolor sit', 'info', 'Info', true );
pam( 'lorem ipsum dolor sit', 'success', 'Success', true );
sep();

pcm( 'lorem ipsum dolor sir', 'pcm' );
pcm( 'lorem ipsum dolor sir', 'pcm foo bar' );

pcm( 'pcm foo str_pad', 'alerta', 20 );
pcm( 'pcm str_pad', 'dolorsitamet', 20 );
pcm( 'pcm foobar str_pad', 'loremipsum', 20 );

pcm( 'pcm foo str_pad', 'alerta', 20, 'right' );
pcm( 'pcm foobar str_pad', 'dolorsitamet', 20, 'right' );
pcm( 'pcm str_pad', 'loremipsum', 20, 'right' );


pel( 'pcm foo str_pad', 'alerta', 20 );
pel( 'pcm str_pad', 'dolorsitamet', 20 );
pel( 'pcm foobar str_pad', 'loremipsum', 20 );

pel( 'pcm foo str_pad', 'alerta', 20, 'right' );
pel( 'pcm str_pad', 'dolorsitamet', 20, 'right' );
pel( 'pcm foobar str_pad', 'loremipsum', 20, 'right' );
?>

<?php get_footer(); ?>