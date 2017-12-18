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
        $__internal_09d187849b75c41fa5c06254b5b9b728d8392ba5a13002c89e5aee4fab2e0408 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09d187849b75c41fa5c06254b5b9b728d8392ba5a13002c89e5aee4fab2e0408->enter($__internal_09d187849b75c41fa5c06254b5b9b728d8392ba5a13002c89e5aee4fab2e0408_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_5fc9b0a9fc6f2b4c9c1d0760552bb978374ddc2e51f59c449439ef32917f5a62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fc9b0a9fc6f2b4c9c1d0760552bb978374ddc2e51f59c449439ef32917f5a62->enter($__internal_5fc9b0a9fc6f2b4c9c1d0760552bb978374ddc2e51f59c449439ef32917f5a62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_09d187849b75c41fa5c06254b5b9b728d8392ba5a13002c89e5aee4fab2e0408->leave($__internal_09d187849b75c41fa5c06254b5b9b728d8392ba5a13002c89e5aee4fab2e0408_prof);

        
        $__internal_5fc9b0a9fc6f2b4c9c1d0760552bb978374ddc2e51f59c449439ef32917f5a62->leave($__internal_5fc9b0a9fc6f2b4c9c1d0760552bb978374ddc2e51f59c449439ef32917f5a62_prof);

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
