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
        $__internal_05fad0fb53512147b3794550702681c83d031bba934b5fe3a378e15fef1c1ef1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05fad0fb53512147b3794550702681c83d031bba934b5fe3a378e15fef1c1ef1->enter($__internal_05fad0fb53512147b3794550702681c83d031bba934b5fe3a378e15fef1c1ef1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_ce39134bbde3d48578d9fd406f79bc8a8396235003a570e7d4158470bb26cac3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce39134bbde3d48578d9fd406f79bc8a8396235003a570e7d4158470bb26cac3->enter($__internal_ce39134bbde3d48578d9fd406f79bc8a8396235003a570e7d4158470bb26cac3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_05fad0fb53512147b3794550702681c83d031bba934b5fe3a378e15fef1c1ef1->leave($__internal_05fad0fb53512147b3794550702681c83d031bba934b5fe3a378e15fef1c1ef1_prof);

        
        $__internal_ce39134bbde3d48578d9fd406f79bc8a8396235003a570e7d4158470bb26cac3->leave($__internal_ce39134bbde3d48578d9fd406f79bc8a8396235003a570e7d4158470bb26cac3_prof);

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
