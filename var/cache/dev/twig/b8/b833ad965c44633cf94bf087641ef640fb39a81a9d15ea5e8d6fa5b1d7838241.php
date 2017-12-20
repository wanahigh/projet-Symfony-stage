<?php

/* @Framework/Form/form_label.html.php */
class __TwigTemplate_dbd90e2f26ec7279a52869efb3b880020edc699c2428084699c89a96bd1fcfc3 extends Twig_Template
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
        $__internal_7b8be5f575b1c469bd9cdab19204f4ea5cb375b385bdc24228163538b43840d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b8be5f575b1c469bd9cdab19204f4ea5cb375b385bdc24228163538b43840d0->enter($__internal_7b8be5f575b1c469bd9cdab19204f4ea5cb375b385bdc24228163538b43840d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        $__internal_6bd68c897e85ba8ec0ebd2bedd9534e6c94cdf48e454b9a24cf9d94bb18b2717 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bd68c897e85ba8ec0ebd2bedd9534e6c94cdf48e454b9a24cf9d94bb18b2717->enter($__internal_6bd68c897e85ba8ec0ebd2bedd9534e6c94cdf48e454b9a24cf9d94bb18b2717_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        // line 1
        echo "<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label<?php if (\$label_attr) { echo ' '.\$view['form']->block(\$form, 'attributes', array('attr' => \$label_attr)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
";
        
        $__internal_7b8be5f575b1c469bd9cdab19204f4ea5cb375b385bdc24228163538b43840d0->leave($__internal_7b8be5f575b1c469bd9cdab19204f4ea5cb375b385bdc24228163538b43840d0_prof);

        
        $__internal_6bd68c897e85ba8ec0ebd2bedd9534e6c94cdf48e454b9a24cf9d94bb18b2717->leave($__internal_6bd68c897e85ba8ec0ebd2bedd9534e6c94cdf48e454b9a24cf9d94bb18b2717_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_label.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label<?php if (\$label_attr) { echo ' '.\$view['form']->block(\$form, 'attributes', array('attr' => \$label_attr)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
", "@Framework/Form/form_label.html.php", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_label.html.php");
    }
}
