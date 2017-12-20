<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_b47ad4bcf27d388f919aa4d02f72b8c3735308a48f90ff9af33b7ca84fd3b1a5 extends Twig_Template
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
        $__internal_ef430845d4b574b0071d0a9c4dc13e26267c0813ae057b1518b3024e54c74366 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef430845d4b574b0071d0a9c4dc13e26267c0813ae057b1518b3024e54c74366->enter($__internal_ef430845d4b574b0071d0a9c4dc13e26267c0813ae057b1518b3024e54c74366_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_bc84bd0c363a7b633675cdb6d6264b2627f36df629af001ed080d80fa4f16aa1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc84bd0c363a7b633675cdb6d6264b2627f36df629af001ed080d80fa4f16aa1->enter($__internal_bc84bd0c363a7b633675cdb6d6264b2627f36df629af001ed080d80fa4f16aa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_ef430845d4b574b0071d0a9c4dc13e26267c0813ae057b1518b3024e54c74366->leave($__internal_ef430845d4b574b0071d0a9c4dc13e26267c0813ae057b1518b3024e54c74366_prof);

        
        $__internal_bc84bd0c363a7b633675cdb6d6264b2627f36df629af001ed080d80fa4f16aa1->leave($__internal_bc84bd0c363a7b633675cdb6d6264b2627f36df629af001ed080d80fa4f16aa1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
