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
        $__internal_1a08c33c10ead3cfa77e9caf07d9abb95cf95064e10f27eff5615ac1bcbfb7fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a08c33c10ead3cfa77e9caf07d9abb95cf95064e10f27eff5615ac1bcbfb7fa->enter($__internal_1a08c33c10ead3cfa77e9caf07d9abb95cf95064e10f27eff5615ac1bcbfb7fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_d400b78ea91e2a506503ee63447c70c2be8777bba98206b4ef0589f187988591 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d400b78ea91e2a506503ee63447c70c2be8777bba98206b4ef0589f187988591->enter($__internal_d400b78ea91e2a506503ee63447c70c2be8777bba98206b4ef0589f187988591_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_1a08c33c10ead3cfa77e9caf07d9abb95cf95064e10f27eff5615ac1bcbfb7fa->leave($__internal_1a08c33c10ead3cfa77e9caf07d9abb95cf95064e10f27eff5615ac1bcbfb7fa_prof);

        
        $__internal_d400b78ea91e2a506503ee63447c70c2be8777bba98206b4ef0589f187988591->leave($__internal_d400b78ea91e2a506503ee63447c70c2be8777bba98206b4ef0589f187988591_prof);

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
