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
        $__internal_52c066b5c4e63da3edcff6881693bd8f51569765384f92032f44746e102d6c6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52c066b5c4e63da3edcff6881693bd8f51569765384f92032f44746e102d6c6e->enter($__internal_52c066b5c4e63da3edcff6881693bd8f51569765384f92032f44746e102d6c6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_4f00971ff57f27bb322a28175a69ed59bf8ebdcd2f1f22f3624096b599270725 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f00971ff57f27bb322a28175a69ed59bf8ebdcd2f1f22f3624096b599270725->enter($__internal_4f00971ff57f27bb322a28175a69ed59bf8ebdcd2f1f22f3624096b599270725_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_52c066b5c4e63da3edcff6881693bd8f51569765384f92032f44746e102d6c6e->leave($__internal_52c066b5c4e63da3edcff6881693bd8f51569765384f92032f44746e102d6c6e_prof);

        
        $__internal_4f00971ff57f27bb322a28175a69ed59bf8ebdcd2f1f22f3624096b599270725->leave($__internal_4f00971ff57f27bb322a28175a69ed59bf8ebdcd2f1f22f3624096b599270725_prof);

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
