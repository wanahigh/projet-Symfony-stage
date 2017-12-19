<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_4ef70e332dd2d5a0b4fe6a494ed455062fe762c3af96a3c940366955ea2f61f6 extends Twig_Template
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
        $__internal_2735fa75a30221ad2f005f90b3f90731144c4ab39834fbcff755878403ff4111 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2735fa75a30221ad2f005f90b3f90731144c4ab39834fbcff755878403ff4111->enter($__internal_2735fa75a30221ad2f005f90b3f90731144c4ab39834fbcff755878403ff4111_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_69499b16d6788e96cdb6dee9f624740b73d25bfd296f870912064bc478aa169f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69499b16d6788e96cdb6dee9f624740b73d25bfd296f870912064bc478aa169f->enter($__internal_69499b16d6788e96cdb6dee9f624740b73d25bfd296f870912064bc478aa169f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_2735fa75a30221ad2f005f90b3f90731144c4ab39834fbcff755878403ff4111->leave($__internal_2735fa75a30221ad2f005f90b3f90731144c4ab39834fbcff755878403ff4111_prof);

        
        $__internal_69499b16d6788e96cdb6dee9f624740b73d25bfd296f870912064bc478aa169f->leave($__internal_69499b16d6788e96cdb6dee9f624740b73d25bfd296f870912064bc478aa169f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
