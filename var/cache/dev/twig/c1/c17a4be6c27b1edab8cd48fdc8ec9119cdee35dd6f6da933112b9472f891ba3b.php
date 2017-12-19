<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_8e2991bbff8e70d34881c8fbae6dcefd76e90ebbcf03559f2d2ec293a315ec44 extends Twig_Template
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
        $__internal_cfcd140d806572d6a94c6acbf2daf62c83883df8a288b4878dac4848981b4e4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfcd140d806572d6a94c6acbf2daf62c83883df8a288b4878dac4848981b4e4a->enter($__internal_cfcd140d806572d6a94c6acbf2daf62c83883df8a288b4878dac4848981b4e4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_583ce037ed6fc7d2114f37426148531e9db5c4931be5bb7587790ba35ebb08e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_583ce037ed6fc7d2114f37426148531e9db5c4931be5bb7587790ba35ebb08e5->enter($__internal_583ce037ed6fc7d2114f37426148531e9db5c4931be5bb7587790ba35ebb08e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_cfcd140d806572d6a94c6acbf2daf62c83883df8a288b4878dac4848981b4e4a->leave($__internal_cfcd140d806572d6a94c6acbf2daf62c83883df8a288b4878dac4848981b4e4a_prof);

        
        $__internal_583ce037ed6fc7d2114f37426148531e9db5c4931be5bb7587790ba35ebb08e5->leave($__internal_583ce037ed6fc7d2114f37426148531e9db5c4931be5bb7587790ba35ebb08e5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
