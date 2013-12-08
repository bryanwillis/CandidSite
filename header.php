<?php

// Exit if accessed directly
if( !defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Header Template
 *
 *
 * @file           header.php
 * @package        Responsive
 * @author         Emil Uzelac
 * @copyright      2003 - 2013 ThemeID
 * @license        license.txt
 * @version        Release: 1.3
 * @filesource     wp-content/themes/responsive/header.php
 * @link           http://codex.wordpress.org/Theme_Development#Document_Head_.28header.php.29
 * @since          available since Release 1.0
 */
?>
	<!doctype html>
	<!--[if !IE]>
	<html class="no-js non-ie" <?php language_attributes(); ?>> <![endif]-->
	<!--[if IE 7 ]>
	<html class="no-js ie7" <?php language_attributes(); ?>> <![endif]-->
	<!--[if IE 8 ]>
	<html class="no-js ie8" <?php language_attributes(); ?>> <![endif]-->
	<!--[if IE 9 ]>
	<html class="no-js ie9" <?php language_attributes(); ?>> <![endif]-->
	<!--[if gt IE 9]><!-->
<html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title><?php wp_title( '&#124;', true, 'right' ); ?></title>

		<link rel="profile" href="http://gmpg.org/xfn/11"/>
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>"/>
    
    
    
    

		<?php wp_head(); ?>
    
    
    <script src="https://www.gstatic.com/swiffy/v5.4/runtime.js"></script>

    <script>
      swiffyobject = {"tags":[{"bounds":[{"ymin":-804,"ymax":345,"xmin":-1443,"xmax":2148}],"id":1,"fillstyles":[{"color":[-8486782],"type":1},{"color":[-1894089],"type":1}],"paths":[{"fill":0,"data":[":92h70Fb4i:1p1cb7f2c3j6ib6c5f6c3pba9h8B4ob8B5f9H1jb1F6c9O6ca1N:a:80Ea9i:arAc:87h:b4i:1p1cb7f2c3j6ib6c5f6c3pba9h8B4ob8B5f9H1jb1F6c9O6ca0N:a:80Ea8i:arAc:31U7Ea76B96fa4f:a7x38Fa7x38fa9f:a78B96Fc:35c:a:96fa3f:a:02Faa:a77c02fa9g:a:96Fa3F:a:12faB:a84C12Fc:86e:a:96fa8r:b2q:5z8Hb2i7H4i1ZbB2Q4I0Zb3I7H5Z7Hc:85dDa:00ga3f:a:00Gc:1oda:96fa8r:b2q:5z8Hb2i7H4i1ZbB2Q4I0Zb3I7H5Z7Hc:72ZOb8Ga5M0cb7E9b3I0hb7C0e4E5kbQ5fQ8mb:3gq8mbq5f4e5kb6c1e3i0hb7e9b5m9bb7e:8jUb1eU6h3Fb5c0D6d9Ia8F:bI3d5C1gbZ8b1F2db6Cm6Gmb6FA1K8Bb5D7B1G1Gb7B5D8C8IbL4EL8Jb:4El8Jbk3E8c8Ibz5D1g2Gb5dZ1k7Bb1d:6glb5cl8e9cbxz1c9fa8f:bF3F0D2Jb3C0D4H8Eb0ER9JRc:0X85hbq:zfaknabkbArLyaYga7C:a:3Fc:7c9gb6d:6d5cb:rNzbMi4Cia5C:a:0Gc:59r4Hb5ca5ewbtxt6eb:3cT6ebTv5Exb6CB5EXbTWT6Eb:2Ct6EbsV5eWc:31i:b6ca5ewbtxt6eb:3cT6ebSv5Exb5CB5EXbSWT6Eba2Ct6EbtV5eWc:751BLbB:D:a4E:a:3ra5e:b9bA4dKboJsUadSb:TK1CbKM0CNa:AaxNbhKhZbAZR6CbPJ7CJc:42e:a:3ras:a:3Rc:7h:a:3ras:a:7Oa9j7oaw:a:3RaR:a:5oaA:a9J5Oc:7u:a:3ra6k:a:Qa8I:a:0Ga9h:a:Qa9H:a:2Fa5i:a:Qc:90i:a:3ra4j:a:Qa5H:a:6Pc:43c:a:qa2f:a:6par:a:6Pa1f:a:Qc:8f:a:3rar:a:3Rc:43c:a:3rar:a:7Oaa:a9j7oaw:a:3RaS:a:5oa9J5Oc:806B:a:5kae2cat9bbol2dlb7bA1dLboLt9BbfPf2Ca:5KaS:a:2kb:7bI9caTpaSdaSDaTPbHLI9Ca:2Kc:1yEbW:0DlbRmS0dbaxo5ca2coa2cnbngozbApMybLh7Bib9BB1DWaQlazua2cgbv:0dObsNt9CbAXO5CbNJ2COa2CMbNHOZbaQlYblH7bHbx:5craqMaWQa9BEc:21g:bW:1DlbQmR0db:xo5cbmj2coa2cnbngnzb:pLya7Bib9BB1DWaQlbjnyua2cgbw:1dObrNs9Cb:XN5CbNJ2COa2CMbNHOZb:QlYblH7bHbw:5crapMaWQa8BEc:2r:bW:1DlbQmR0db:xo5cbmj2coa2cnbngnzb:pLya7Bib9BB1DWaQlazua1cgbw:1dObrNs9Cb:XN5CbNJ2COa2CMbNHOZb:QlYblH7bHbw:5crapMbJLWQa8BEc:93b:bW:1DlbQmS0dbaxo5cbnj2coa3cnbngnzb:pLya7Bib0CB1DWaQlayua2cgbw:1dObrNs9Cb:XN5CbOJ3COa2CMbMHOZbaQmYblH7bHbw:5crapMaWQa8BEc:4u:b2D:8F7bb7B7b7B9fb:3d7b9fbz7b8f8bb2dA8f8BbzZ7b9FbA2D7B9FbZ7B8F7Bc:36cea:5kae2cbeqt9bbol2dlb7bA1dLboLt9Baf2Ca:5KaS:a:2kbA7bJ9caTpaRdaSDaTPbILJ9Ca:2Kc:77eEb1D:8F7bbZ7b7B9fba3d7b9fb7b7b8f8bb2dA8f8Bb7bZ7b9Fb:2D7B9FbZ7B8F7Bc:63d:bX:1DlbRmS0dbaxo5ca2coa3cnbmgnzbApMybLhZib0CB2DWaQlazua2cgbv:1dObrNs9CbAXN5Ca3COa2CMbNHOZbaQmYblH7bHbw:5crapMbKLWQa8BEc"]},{"fill":1,"data":[":16C43Cb9B:8DtbTsT8db:9bt9dbss8dtb9bA9dTbsTt9DbA9BT8DbTT9DTc:27K61Da:49ka7b:a:49Kc"]}],"flat":true,"type":1},{"id":1,"matrix":"::::760b51l","type":3,"depth":1},{"bounds":[{"ymin":-357,"ymax":358,"xmin":-387,"xmax":387}],"id":2,"fillstyles":[{"color":[-1894089],"type":1}],"paths":[{"fill":0,"data":[":9P57Cb2Da1G9bb8B9b9B1gba4d9b2gb9b8b1g0cb4dB2g0Cb8b8B0c2GbB2D0C1Gb8B8B2G9Bc:19c:b2Da1G9bb8B9b9B1gba4d9b2gb9b8b1g0cb4dB2g0Cb9b8B0c2GbA2D0C1Gb8B8B2G9Bc:3O73bb7ca2fzbxxz2fbB7cZ2fbYx2Fyb7CA2FYbYYY2Fb:8Cy2FbyY2fZc:83BNb3Db2G0cb8B8b9B1gba3d9b1gb9b9b2g0cb3dA2g9Bb8b9B9b2GbA3D9B1Gb9B8B2G0Cc:72e:b2Db1G0cb8B8b0C1gbb3d0c1gb9b9b1g0cb3dA1g9Bb9b9B0c2GbA3D9B1Gb9B8B2G0Cc:89BMb2Ca7Epb7Bo2D1dbOzO8eb:2co7eboz2d1dbyo7epb2cA8ePbyO1d1DboYp7EbA2CP8EbPZ1D1DbZO8EPc:6P7zb2Db1G0cb8B8b9B1gba3d9b1gb9b9b1g0cb4dA2g9Bb8b9B0c2GbB3D0C1Gb8B8B2G0Cc:19c:b2Db1G0cb8B8b9B1gba3d9b1gb9b9b1g0cb4dA2g9Bb9b9B0c2GbA3D0C1Gb8B8B2G0Cc"]}],"flat":true,"type":1},{"id":2,"matrix":"::::97f21j","type":3,"depth":2},{"bounds":[{"ymin":-1130,"ymax":1130,"xmin":-2509,"xmax":2510}],"id":3,"fillstyles":[{"color":[-16777216],"type":1}],"paths":[{"fill":0,"data":[":09Y30Ka:60va019e:a:60Vc"]}],"flat":true,"type":1},{"id":4,"records":[{"id":3,"transform":"::::::","states":8,"depth":1}],"type":10,"actions":[{"events":2048,"key":0,"actions":[{"value":"http://www.candidbusiness.com","type":305},{"value":"","type":305},{"method":0,"type":154}]}]},{"id":4,"matrix":"43J::279I89y50l","type":3,"depth":3},{"type":2},{"replace":true,"matrix":"33J380k380K33J97f21j","type":3,"depth":2},{"type":2},{"replace":true,"matrix":"026D415v415V026D97f21j","type":3,"depth":2},{"type":2},{"replace":true,"matrix":"780H2582c2582C780H97f21j","type":3,"depth":2},{"type":2},{"replace":true,"matrix":"332O1961d1961D332O97f21j","type":3,"depth":2},{"type":2},{"replace":true,"matrix":"575W0204e0204E575W97f21j","type":3,"depth":2},{"type":2},{"replace":true,"matrix":"2954C6756e6756E2954C97f21j","type":3,"depth":2},{"type":2},{"replace":true,"matrix":"3121D1510f1510F3121D97f21j","type":3,"depth":2},{"type":2},{"replace":true,"matrix":"4156E4503f4503F4156E97f21j","type":3,"depth":2},{"type":2},{"replace":true,"matrix":"5536F5536f5536F5536F97f21j","type":3,"depth":2},{"type":2},{"replace":true,"matrix":"5788G4695f4695F5788G97f21j","type":3,"depth":2},{"type":2},{"replace":true,"matrix":"5584H2328f2328F5584H97f21j","type":3,"depth":2},{"type":2},{"replace":true,"matrix":"5289I8295e8295E5289I97f21j","type":3,"depth":2},{"type":2},{"replace":true,"matrix":"3883J3020e3020E3883J97f21j","type":3,"depth":2},{"type":2},{"replace":true,"matrix":"1877K6341d6341D1877K97f21j","type":3,"depth":2},{"type":2},{"replace":true,"matrix":"8556K8347c8347C8556K97f21j","type":3,"depth":2},{"type":2},{"replace":true,"matrix":"3831L9753b9753B3831L97f21j","type":3,"depth":2},{"type":2},{"replace":true,"matrix":"7864L048t048T7864L97f21j","type":3,"depth":2},{"type":2},{"replace":true,"matrix":"0231M252j252J0231M97f21j","type":3,"depth":2},{"type":2},{"replace":true,"matrix":"1072M::1072M97f21j","type":3,"depth":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2},{"type":2}],"fileSize":2066,"v":"5.4.0","backgroundColor":-1,"frameSize":{"ymin":0,"ymax":2500,"xmin":0,"xmax":5000},"frameCount":211,"frameRate":18,"version":9};
    </script>
    
    
    
	</head>

<body <?php body_class(); ?>>

<?php responsive_container(); // before container hook ?>
<div id="container" class="hfeed">

<?php responsive_header(); // before header hook ?>
	<div id="header">

		<?php responsive_header_top(); // before header content hook ?>

		<?php if( has_nav_menu( 'top-menu', 'responsive' ) ) { ?>
			<?php wp_nav_menu( array(
								   'container'      => '',
								   'fallback_cb'    => false,
								   'menu_class'     => 'top-menu',
								   'theme_location' => 'top-menu'
							   )
			);
			?>
		<?php } ?>


			<div id="logo">
        <div id="swiffycontainer" style="width: 250px; height: 125px"></div>
     <script>

      var stage = new swiffy.Stage(document.getElementById('swiffycontainer'),
                                   swiffyobject);
      stage.start();
    </script>
			</div><!-- end of #logo -->
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar Widgets') ) : ?>
      <?php endif; ?>



		<?php get_sidebar( 'top' ); ?>
		<?php wp_nav_menu( array(
							   'container'       => 'div',
							   'container_class' => 'main-nav',
							   'fallback_cb'     => 'responsive_fallback_menu',
							   'theme_location'  => 'header-menu'
						   )
		);
		?>

		<?php if( has_nav_menu( 'sub-header-menu', 'responsive' ) ) { ?>
			<?php wp_nav_menu( array(
								   'container'      => '',
								   'menu_class'     => 'sub-header-menu',
								   'theme_location' => 'sub-header-menu'
							   )
			);
			?>
		<?php } ?>

		<?php responsive_header_bottom(); // after header content hook ?>

	</div><!-- end of #header -->
<?php responsive_header_end(); // after header container hook ?>

<?php responsive_wrapper(); // before wrapper container hook ?>
	<div id="wrapper" class="clearfix">
<?php responsive_wrapper_top(); // before wrapper content hook ?>
<?php responsive_in_wrapper(); // wrapper hook ?>