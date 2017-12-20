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
        $__internal_454b29fe4dccf75a7a1c769e2def747d74bb1da69943f767b9aaf7edb08cc722 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_454b29fe4dccf75a7a1c769e2def747d74bb1da69943f767b9aaf7edb08cc722->enter($__internal_454b29fe4dccf75a7a1c769e2def747d74bb1da69943f767b9aaf7edb08cc722_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_276f366a05e20f60bad0fd7db9b4f291da871c66450ca41e3b0ff9a655de49e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_276f366a05e20f60bad0fd7db9b4f291da871c66450ca41e3b0ff9a655de49e3->enter($__internal_276f366a05e20f60bad0fd7db9b4f291da871c66450ca41e3b0ff9a655de49e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_454b29fe4dccf75a7a1c769e2def747d74bb1da69943f767b9aaf7edb08cc722->leave($__internal_454b29fe4dccf75a7a1c769e2def747d74bb1da69943f767b9aaf7edb08cc722_prof);

        
        $__internal_276f366a05e20f60bad0fd7db9b4f291da871c66450ca41e3b0ff9a655de49e3->leave($__internal_276f366a05e20f60bad0fd7db9b4f291da871c66450ca41e3b0ff9a655de49e3_prof);

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
