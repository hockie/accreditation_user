<?php

/* C:\xampp\htdocs\accreditation_user\Vendor\cakephp\bake\src\Template\Bake\Template\index.twig */
class __TwigTemplate_9ab0fef0d127293c41297d28494666100236f8e128fd0e0f6791f3c0c2d83ab8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 16
        echo "<?php
/**
 * @var \\";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["namespace"]) ? $context["namespace"] : null), "html", null, true);
        echo "\\View\\AppView \$this
 * @var \\";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["entityClass"]) ? $context["entityClass"] : null), "html", null, true);
        echo "[]|\\Cake\\Collection\\CollectionInterface \$";
        echo twig_escape_filter($this->env, (isset($context["pluralVar"]) ? $context["pluralVar"] : null), "html", null, true);
        echo "
 */
?>
";
        // line 22
        $context["fields"] = $this->getAttribute((isset($context["Bake"]) ? $context["Bake"] : null), "filterFields", array(0 => (isset($context["fields"]) ? $context["fields"] : null), 1 => (isset($context["schema"]) ? $context["schema"] : null), 2 => (isset($context["modelObject"]) ? $context["modelObject"] : null), 3 => (isset($context["indexColumns"]) ? $context["indexColumns"] : null), 4 => array(0 => "binary", 1 => "text")), "method");
        // line 23
        echo "<div class=\"card\">
      <div class=\"card-header\">
\t\t<h4><?= __('";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["pluralHumanName"]) ? $context["pluralHumanName"] : null), "html", null, true);
        echo "') ?> <span class=\"float-md-right\"><a type=\"button\" class=\"btn btn-info btn-md\" data-toggle=\"modal\" href=\"#myModal\"><i class='fa fa-plus'></i> Add <?= __('";
        echo twig_escape_filter($this->env, (isset($context["pluralHumanName"]) ? $context["pluralHumanName"] : null), "html", null, true);
        echo "') ?></a></span></h4>
      </div>
      <div class=\"card-body\">\t
\t<div class=\"table-responsive\">
\t\t\t <table class=\"table table-striped table-hover\">
        <thead>
            <tr>
";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fields"]) ? $context["fields"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 33
            echo "                <th scope=\"col\"><?= \$this->Paginator->sort('";
            echo twig_escape_filter($this->env, $context["field"], "html", null, true);
            echo "') ?></th>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "                <th scope=\"col\" class=\"actions\"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach (\$";
        // line 39
        echo twig_escape_filter($this->env, (isset($context["pluralVar"]) ? $context["pluralVar"] : null), "html", null, true);
        echo " as \$";
        echo twig_escape_filter($this->env, (isset($context["singularVar"]) ? $context["singularVar"] : null), "html", null, true);
        echo "): ?>
            <tr>
";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fields"]) ? $context["fields"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 42
            $context["isKey"] = false;
            // line 43
            if ($this->getAttribute((isset($context["associations"]) ? $context["associations"] : null), "BelongsTo", array())) {
                // line 44
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["associations"]) ? $context["associations"] : null), "BelongsTo", array()));
                foreach ($context['_seq'] as $context["alias"] => $context["details"]) {
                    if (($context["field"] == $this->getAttribute($context["details"], "foreignKey", array()))) {
                        // line 45
                        $context["isKey"] = true;
                        // line 46
                        echo "                <td><?= \$";
                        echo twig_escape_filter($this->env, (isset($context["singularVar"]) ? $context["singularVar"] : null), "html", null, true);
                        echo "->has('";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["details"], "property", array()), "html", null, true);
                        echo "') ? \$this->Html->link(\$";
                        echo twig_escape_filter($this->env, (isset($context["singularVar"]) ? $context["singularVar"] : null), "html", null, true);
                        echo "->";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["details"], "property", array()), "html", null, true);
                        echo "->";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["details"], "displayField", array()), "html", null, true);
                        echo ", ['controller' => '";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["details"], "controller", array()), "html", null, true);
                        echo "', 'action' => 'view', \$";
                        echo twig_escape_filter($this->env, (isset($context["singularVar"]) ? $context["singularVar"] : null), "html", null, true);
                        echo "->";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["details"], "property", array()), "html", null, true);
                        echo "->";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["details"], "primaryKey", array()), 0, array(), "array"), "html", null, true);
                        echo "]) : '' ?></td>
";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['alias'], $context['details'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
            // line 49
            if ( !((isset($context["isKey"]) ? $context["isKey"] : null) === true)) {
                // line 50
                $context["columnData"] = $this->getAttribute((isset($context["Bake"]) ? $context["Bake"] : null), "columnData", array(0 => $context["field"], 1 => (isset($context["schema"]) ? $context["schema"] : null)), "method");
                // line 51
                if (!twig_in_filter($this->getAttribute((isset($context["columnData"]) ? $context["columnData"] : null), "type", array()), array(0 => "integer", 1 => "float", 2 => "decimal", 3 => "biginteger", 4 => "smallinteger", 5 => "tinyinteger"))) {
                    // line 52
                    echo "                <td><?= h(\$";
                    echo twig_escape_filter($this->env, (isset($context["singularVar"]) ? $context["singularVar"] : null), "html", null, true);
                    echo "->";
                    echo twig_escape_filter($this->env, $context["field"], "html", null, true);
                    echo ") ?></td>
";
                } else {
                    // line 54
                    echo "                <td><?= \$this->Number->format(\$";
                    echo twig_escape_filter($this->env, (isset($context["singularVar"]) ? $context["singularVar"] : null), "html", null, true);
                    echo "->";
                    echo twig_escape_filter($this->env, $context["field"], "html", null, true);
                    echo ") ?></td>
";
                }
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        $context["pk"] = ((("\$" . (isset($context["singularVar"]) ? $context["singularVar"] : null)) . "->") . $this->getAttribute((isset($context["primaryKey"]) ? $context["primaryKey"] : null), 0, array(), "array"));
        // line 59
        echo "                <td class=\"actions\">
                    <?= \$this->Html->link(__('View'), ['action' => 'view', ";
        // line 60
        echo (isset($context["pk"]) ? $context["pk"] : null);
        echo "]) ?>
                    <?= \$this->Html->link(__('Edit'), ['action' => 'edit', ";
        // line 61
        echo (isset($context["pk"]) ? $context["pk"] : null);
        echo "]) ?>
                    <?= \$this->Form->postLink(__('Delete'), ['action' => 'delete', ";
        // line 62
        echo (isset($context["pk"]) ? $context["pk"] : null);
        echo "], ['confirm' => __('Are you sure you want to delete # {0}?', ";
        echo (isset($context["pk"]) ? $context["pk"] : null);
        echo ")]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class=\"paginator\">
        <ul class=\"pagination\">
            <?= \$this->Paginator->first('<< ' . __('first')) ?>
            <?= \$this->Paginator->prev('< ' . __('previous')) ?>
            <?= \$this->Paginator->numbers() ?>
            <?= \$this->Paginator->next(__('next') . ' >') ?>
            <?= \$this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= \$this->Paginator->counter(['format' => __('Page ";
        // line 76
        echo "{{";
        echo "page";
        echo "}}";
        echo " of ";
        echo "{{";
        echo "pages";
        echo "}}";
        echo ", showing ";
        echo "{{";
        echo "current";
        echo "}}";
        echo " record(s) out of ";
        echo "{{";
        echo "count";
        echo "}}";
        echo " total')]) ?></p>
    </div>
</div>
 </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\accreditation_user\\Vendor\\cakephp\\bake\\src\\Template\\Bake\\Template\\index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 76,  161 => 62,  157 => 61,  153 => 60,  150 => 59,  148 => 58,  135 => 54,  127 => 52,  125 => 51,  123 => 50,  121 => 49,  94 => 46,  92 => 45,  87 => 44,  85 => 43,  83 => 42,  79 => 41,  72 => 39,  66 => 35,  57 => 33,  53 => 32,  41 => 25,  37 => 23,  35 => 22,  27 => 19,  23 => 18,  19 => 16,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         2.0.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
#}
<?php
/**
 * @var \\{{ namespace }}\\View\\AppView \$this
 * @var \\{{ entityClass }}[]|\\Cake\\Collection\\CollectionInterface \${{ pluralVar }}
 */
?>
{% set fields = Bake.filterFields(fields, schema, modelObject, indexColumns, ['binary', 'text']) %}
<div class=\"card\">
      <div class=\"card-header\">
\t\t<h4><?= __('{{ pluralHumanName }}') ?> <span class=\"float-md-right\"><a type=\"button\" class=\"btn btn-info btn-md\" data-toggle=\"modal\" href=\"#myModal\"><i class='fa fa-plus'></i> Add <?= __('{{ pluralHumanName }}') ?></a></span></h4>
      </div>
      <div class=\"card-body\">\t
\t<div class=\"table-responsive\">
\t\t\t <table class=\"table table-striped table-hover\">
        <thead>
            <tr>
{% for field in fields %}
                <th scope=\"col\"><?= \$this->Paginator->sort('{{ field }}') ?></th>
{% endfor %}
                <th scope=\"col\" class=\"actions\"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach (\${{ pluralVar }} as \${{ singularVar }}): ?>
            <tr>
{% for field in fields %}
{% set isKey = false %}
{% if associations.BelongsTo %}
{% for alias, details in associations.BelongsTo if field == details.foreignKey %}
{% set isKey = true %}
                <td><?= \${{ singularVar }}->has('{{ details.property }}') ? \$this->Html->link(\${{ singularVar }}->{{ details.property }}->{{ details.displayField }}, ['controller' => '{{ details.controller }}', 'action' => 'view', \${{ singularVar }}->{{ details.property }}->{{ details.primaryKey[0] }}]) : '' ?></td>
{% endfor %}
{% endif %}
{% if isKey is not same as(true) %}
{% set columnData = Bake.columnData(field, schema) %}
{% if columnData.type not in ['integer', 'float', 'decimal', 'biginteger', 'smallinteger', 'tinyinteger'] %}
                <td><?= h(\${{ singularVar }}->{{ field }}) ?></td>
{% else %}
                <td><?= \$this->Number->format(\${{ singularVar }}->{{ field }}) ?></td>
{% endif %}
{% endif %}
{% endfor %}
{% set pk = '\$' ~ singularVar ~ '->' ~ primaryKey[0] %}
                <td class=\"actions\">
                    <?= \$this->Html->link(__('View'), ['action' => 'view', {{ pk|raw }}]) ?>
                    <?= \$this->Html->link(__('Edit'), ['action' => 'edit', {{ pk|raw }}]) ?>
                    <?= \$this->Form->postLink(__('Delete'), ['action' => 'delete', {{ pk|raw }}], ['confirm' => __('Are you sure you want to delete # {0}?', {{ pk|raw }})]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class=\"paginator\">
        <ul class=\"pagination\">
            <?= \$this->Paginator->first('<< ' . __('first')) ?>
            <?= \$this->Paginator->prev('< ' . __('previous')) ?>
            <?= \$this->Paginator->numbers() ?>
            <?= \$this->Paginator->next(__('next') . ' >') ?>
            <?= \$this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= \$this->Paginator->counter(['format' => __('Page {{ '{{' }}page{{ '}}' }} of {{ '{{' }}pages{{ '}}' }}, showing {{ '{{' }}current{{ '}}' }} record(s) out of {{ '{{' }}count{{ '}}' }} total')]) ?></p>
    </div>
</div>
 </div>
</div>
", "C:\\xampp\\htdocs\\accreditation_user\\Vendor\\cakephp\\bake\\src\\Template\\Bake\\Template\\index.twig", "C:\\xampp\\htdocs\\accreditation_user\\Vendor\\cakephp\\bake\\src\\Template\\Bake\\Template\\index.twig");
    }
}
