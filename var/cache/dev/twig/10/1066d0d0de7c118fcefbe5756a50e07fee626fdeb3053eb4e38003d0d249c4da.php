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
        $__internal_b53d4bb5236879ed5d0184f0b4155bb94ab4de8ca8070f2b4a45ed3b486b0474 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b53d4bb5236879ed5d0184f0b4155bb94ab4de8ca8070f2b4a45ed3b486b0474->enter($__internal_b53d4bb5236879ed5d0184f0b4155bb94ab4de8ca8070f2b4a45ed3b486b0474_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_3338d51b52435399d8c8e3f777d5b0c4b134a93bfd535d719ea85adde9510005 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3338d51b52435399d8c8e3f777d5b0c4b134a93bfd535d719ea85adde9510005->enter($__internal_3338d51b52435399d8c8e3f777d5b0c4b134a93bfd535d719ea85adde9510005_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_b53d4bb5236879ed5d0184f0b4155bb94ab4de8ca8070f2b4a45ed3b486b0474->leave($__internal_b53d4bb5236879ed5d0184f0b4155bb94ab4de8ca8070f2b4a45ed3b486b0474_prof);

        
        $__internal_3338d51b52435399d8c8e3f777d5b0c4b134a93bfd535d719ea85adde9510005->leave($__internal_3338d51b52435399d8c8e3f777d5b0c4b134a93bfd535d719ea85adde9510005_prof);

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
