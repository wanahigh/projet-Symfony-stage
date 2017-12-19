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
        $__internal_d85944de79cd22e86de9fb4b66749209a71d8ef3af10eb836beb3f6fbeea58ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d85944de79cd22e86de9fb4b66749209a71d8ef3af10eb836beb3f6fbeea58ea->enter($__internal_d85944de79cd22e86de9fb4b66749209a71d8ef3af10eb836beb3f6fbeea58ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        $__internal_a6b80803377b5cb91f925d4d1473f6a08d7e19c312007e55ef330c124e669075 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6b80803377b5cb91f925d4d1473f6a08d7e19c312007e55ef330c124e669075->enter($__internal_a6b80803377b5cb91f925d4d1473f6a08d7e19c312007e55ef330c124e669075_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

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
        
        $__internal_d85944de79cd22e86de9fb4b66749209a71d8ef3af10eb836beb3f6fbeea58ea->leave($__internal_d85944de79cd22e86de9fb4b66749209a71d8ef3af10eb836beb3f6fbeea58ea_prof);

        
        $__internal_a6b80803377b5cb91f925d4d1473f6a08d7e19c312007e55ef330c124e669075->leave($__internal_a6b80803377b5cb91f925d4d1473f6a08d7e19c312007e55ef330c124e669075_prof);

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
