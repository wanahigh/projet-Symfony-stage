<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_f99e02fe4a229633f2654944d416bc22a84dd54593204dce3594ac26214ddfc4 extends Twig_Template
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
        $__internal_ab5e127f3ca4656ff14e910bea00653bed01e6fe8368ec97e7ded1b5f8674cd9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab5e127f3ca4656ff14e910bea00653bed01e6fe8368ec97e7ded1b5f8674cd9->enter($__internal_ab5e127f3ca4656ff14e910bea00653bed01e6fe8368ec97e7ded1b5f8674cd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_3aca5b0de5dd6abdc67220c60ee56325d814c0c5d7e444b17767fd1ade9d2fe2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3aca5b0de5dd6abdc67220c60ee56325d814c0c5d7e444b17767fd1ade9d2fe2->enter($__internal_3aca5b0de5dd6abdc67220c60ee56325d814c0c5d7e444b17767fd1ade9d2fe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_ab5e127f3ca4656ff14e910bea00653bed01e6fe8368ec97e7ded1b5f8674cd9->leave($__internal_ab5e127f3ca4656ff14e910bea00653bed01e6fe8368ec97e7ded1b5f8674cd9_prof);

        
        $__internal_3aca5b0de5dd6abdc67220c60ee56325d814c0c5d7e444b17767fd1ade9d2fe2->leave($__internal_3aca5b0de5dd6abdc67220c60ee56325d814c0c5d7e444b17767fd1ade9d2fe2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
