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
        $__internal_3d79fcd05f595f24b2ec93a35b0d7c5fcb8a2d4f4df4a2bbc57a5fb81be413d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d79fcd05f595f24b2ec93a35b0d7c5fcb8a2d4f4df4a2bbc57a5fb81be413d8->enter($__internal_3d79fcd05f595f24b2ec93a35b0d7c5fcb8a2d4f4df4a2bbc57a5fb81be413d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_dcefdb6b104f70c3c12f4091650ac365d7f0972f0af939866cbbd01446bfc8a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcefdb6b104f70c3c12f4091650ac365d7f0972f0af939866cbbd01446bfc8a4->enter($__internal_dcefdb6b104f70c3c12f4091650ac365d7f0972f0af939866cbbd01446bfc8a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_3d79fcd05f595f24b2ec93a35b0d7c5fcb8a2d4f4df4a2bbc57a5fb81be413d8->leave($__internal_3d79fcd05f595f24b2ec93a35b0d7c5fcb8a2d4f4df4a2bbc57a5fb81be413d8_prof);

        
        $__internal_dcefdb6b104f70c3c12f4091650ac365d7f0972f0af939866cbbd01446bfc8a4->leave($__internal_dcefdb6b104f70c3c12f4091650ac365d7f0972f0af939866cbbd01446bfc8a4_prof);

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
