<?php
/**
 * Model template file.
 *
 * Used by bake to create new Model files.
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         CakePHP(tm) v 1.3
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

echo "<?php\n";
echo "App::uses('{$plugin}AppModel', '{$pluginPath}Model');\n";
?>

/**
 * <?php echo $name ?> Model
 *
<?php
foreach (array('hasOne', 'belongsTo', 'hasMany', 'hasAndBelongsToMany') as $assocType) {
	if (!empty($associations[$assocType])) {
		foreach ($associations[$assocType] as $relation) {
			//echo " * @property {$relation['className']} \${$relation['alias']}\n";
		}
	}
}
?>
 */
class <?php echo $name ?> extends <?php echo $plugin; ?>AppModel {

<?php if ($useDbConfig !== 'default'): ?>
	public $useDbConfig = '<?php echo $useDbConfig; ?>';

<?php endif;?>
<?php if ($useTable && $useTable !== Inflector::tableize($name)):
	$table = "'$useTable'";
	echo "\tpublic \$useTable = $table;\n";
endif;
if (!empty($primaryKey) && $primaryKey !== 'id'): ?>
	public $primaryKey = '<?php echo $primaryKey; ?>';

<?php endif;

/** CORE-MOD 2008-12-01 **/
if (!empty($displayField) && $displayField !== 'name' && $displayField !== 'title'): ?>
	public $displayField = '<?php echo $displayField; ?>';

<?php endif; ?>
<?php if (!empty($actsAs)) { ?>
	public $actsAs = array(<?php if (count($actsAs) > 0): echo "\n\t"; endif; foreach ($actsAs as $actAs): echo "\t"; var_export($actAs); echo ",\n\t"; endforeach; ?>);

<?php } ?>
<?php if (isset($orderBy)) { ?>
	public $order = array(<?php if (count($orderBy) > 0): echo "\n\t"; endif; foreach ($orderBy as $order => $mode): echo "\t"; var_export($order); echo ' => '; var_export($mode); echo ",\n\t"; endforeach; ?>);

<?php } else { ?>
	public $order = array();

<?php } ?>
<?php
/** CORE-MOD END **/

if (!empty($validate)):
	echo "\tpublic \$validate = array(\n";
	foreach ($validate as $field => $validations):
		echo "\t\t'$field' => array(\n";
		foreach ($validations as $key => $validator):
			echo "\t\t\t'$key' => array(\n";
			echo "\t\t\t\t'rule' => array('$validator'),\n";
			echo "\t\t\t\t'message' => 'valErrMandatoryField',\n";
			echo "\t\t\t\t'last' => true,\n";
			/** CORE-MOD 2008-12-01 - not needed **/
			//echo "\t\t\t\t'allowEmpty' => false,\n";
			//echo "\t\t\t\t'required' => false,\n";
			//echo "\t\t\t\t'on' => 'create', // Limit validation to 'create' or 'update' operations\n";
			/** CORE-MOD END **/
			echo "\t\t\t),\n";
		endforeach;
		echo "\t\t),\n";
	endforeach;
	echo "\t);\n";
endif;

?>

<?php
foreach (array('hasOne', 'belongsTo') as $assocType):
	if (!empty($associations[$assocType])):
		$typeCount = count($associations[$assocType]);
		echo "\n\t/**\n\t * $assocType associations\n\t *\n\t * @var array\n\t */";
		echo "\n\tpublic \$$assocType = array(";
		foreach ($associations[$assocType] as $i => $relation):
			$out = "\n\t\t'{$relation['alias']}' => array(\n";
			$out .= "\t\t\t'className' => '{$relation['className']}',\n";
			$out .= "\t\t\t'foreignKey' => '{$relation['foreignKey']}',\n";
			$out .= "\t\t\t'conditions' => '',\n";
			$out .= "\t\t\t'fields' => '',\n";
			$out .= "\t\t\t'order' => ''\n";
			$out .= "\t\t)";
			if ($i + 1 < $typeCount) {
				$out .= ",";
			}
			echo $out;
		endforeach;
		echo "\n\t);\n";
	endif;
endforeach;

if (!empty($associations['hasMany'])):
	$belongsToCount = count($associations['hasMany']);
	echo "\n\tpublic \$hasMany = array(";
	foreach ($associations['hasMany'] as $i => $relation):
		$out = "\n\t\t'{$relation['alias']}' => array(\n";
		$out .= "\t\t\t'className' => '{$relation['className']}',\n";
		$out .= "\t\t\t'foreignKey' => '{$relation['foreignKey']}',\n";
		$out .= "\t\t\t'dependent' => false,\n";
		$out .= "\t\t\t'conditions' => '',\n";
		$out .= "\t\t\t'fields' => '',\n";
		$out .= "\t\t\t'order' => '',\n";
		//$out .= "\t\t\t'limit' => '',\n";
		//$out .= "\t\t\t'offset' => '',\n";
		//$out .= "\t\t\t'exclusive' => '',\n";
		//$out .= "\t\t\t'finderQuery' => '',\n";
		//$out .= "\t\t\t'counterQuery' => ''\n";
		$out .= "\t\t)";
		if ($i + 1 < $belongsToCount) {
			$out .= ",";
		}
		echo $out;
	endforeach;
	echo "\n\t);\n\n";
endif;

if (!empty($associations['hasAndBelongsToMany'])):
	$habtmCount = count($associations['hasAndBelongsToMany']);
	echo "\n\tpublic \$hasAndBelongsToMany = array(";
	foreach ($associations['hasAndBelongsToMany'] as $i => $relation):
		$out = "\n\t\t'{$relation['alias']}' => array(\n";
		$out .= "\t\t\t'className' => '{$relation['className']}',\n";
		$out .= "\t\t\t'joinTable' => '{$relation['joinTable']}',\n";
		$out .= "\t\t\t'foreignKey' => '{$relation['foreignKey']}',\n";
		$out .= "\t\t\t'associationForeignKey' => '{$relation['associationForeignKey']}',\n";
		$out .= "\t\t\t'unique' => 'keepExisting',\n";
		$out .= "\t\t\t'conditions' => '',\n";
		$out .= "\t\t\t'fields' => '',\n";
		$out .= "\t\t\t'order' => '',\n";
		//$out .= "\t\t\t'limit' => '',\n";
		//$out .= "\t\t\t'offset' => '',\n";
		//$out .= "\t\t\t'finderQuery' => '',\n";
		//$out .= "\t\t\t'deleteQuery' => '',\n";
		//$out .= "\t\t\t'insertQuery' => ''\n";
		$out .= "\t\t)";
		if ($i + 1 < $habtmCount) {
			$out .= ",";
		}
		echo $out;
	endforeach;
	echo "\n\t);\n\n";
endif;
?>
}
