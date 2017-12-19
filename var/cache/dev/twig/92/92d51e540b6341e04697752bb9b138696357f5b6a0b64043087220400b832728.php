<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_f6001fc21a3ad110baae05e018c9cea0ecfaf9dc4dbaf26715a240c2ac40ac29 extends Twig_Template
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
        $__internal_6edee9dae01512555e0373abb587aeb72e1c6cf03b2e946ff328cc356f86b748 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6edee9dae01512555e0373abb587aeb72e1c6cf03b2e946ff328cc356f86b748->enter($__internal_6edee9dae01512555e0373abb587aeb72e1c6cf03b2e946ff328cc356f86b748_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_96f2a703317ce683995d5e912de82e09b6ac2c7c4db236ce2a74721d13646103 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96f2a703317ce683995d5e912de82e09b6ac2c7c4db236ce2a74721d13646103->enter($__internal_96f2a703317ce683995d5e912de82e09b6ac2c7c4db236ce2a74721d13646103_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_6edee9dae01512555e0373abb587aeb72e1c6cf03b2e946ff328cc356f86b748->leave($__internal_6edee9dae01512555e0373abb587aeb72e1c6cf03b2e946ff328cc356f86b748_prof);

        
        $__internal_96f2a703317ce683995d5e912de82e09b6ac2c7c4db236ce2a74721d13646103->leave($__internal_96f2a703317ce683995d5e912de82e09b6ac2c7c4db236ce2a74721d13646103_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
