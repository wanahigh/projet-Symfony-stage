<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_9561d4c3af7d2f9ffb32867bc3838c2562bf984be6e1bffc143f4a72c019916a extends Twig_Template
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
        $__internal_24b28dd12baed357b34351f86121b9a9b27e177bdbef2ecfd5e50f07e9d919d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24b28dd12baed357b34351f86121b9a9b27e177bdbef2ecfd5e50f07e9d919d2->enter($__internal_24b28dd12baed357b34351f86121b9a9b27e177bdbef2ecfd5e50f07e9d919d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_f7f1de9673a97bb1fd078adc8171fcaba3ca2037245eb0893d80daf9f39f3b3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7f1de9673a97bb1fd078adc8171fcaba3ca2037245eb0893d80daf9f39f3b3b->enter($__internal_f7f1de9673a97bb1fd078adc8171fcaba3ca2037245eb0893d80daf9f39f3b3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_24b28dd12baed357b34351f86121b9a9b27e177bdbef2ecfd5e50f07e9d919d2->leave($__internal_24b28dd12baed357b34351f86121b9a9b27e177bdbef2ecfd5e50f07e9d919d2_prof);

        
        $__internal_f7f1de9673a97bb1fd078adc8171fcaba3ca2037245eb0893d80daf9f39f3b3b->leave($__internal_f7f1de9673a97bb1fd078adc8171fcaba3ca2037245eb0893d80daf9f39f3b3b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}
