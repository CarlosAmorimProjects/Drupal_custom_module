<?php

/**
 * @file
 */
namespace Drupal\hello_block\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Mensagem de boas-vindas personalizada
 * @Block(
 * id = "block_hello-block",
 * admin_label = @Translation("hello_block"),
 * )
 */
class HelloBlock extends BlockBase {

	/**
	 * {@inheritdoc}
	 */
	public function build() {
		$hour = date('H');
		$dayTerm = ($hour > 19 || $hour < 06) ? "uma boa noite" : (($hour > 12) ? "uma boa tarde" : "um bom dia");;
		return array (
			'#type' => 'markup',
      		'#markup' => " Tenha $dayTerm com ",
		);
	}

}



