<?php
/**
 * Template part l'affichage des bloc de cours dans front-page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package theme4w4
 */

global $tPropriété;
?>

<article>

	<div><?php echo $tPropriété['sigle']; ?></div>
  <div><?php echo $tPropriété['typeCours']; ?></div>
  <div><?php echo $tPropriété['nbHeure'] ; ?></div>
	
</article>