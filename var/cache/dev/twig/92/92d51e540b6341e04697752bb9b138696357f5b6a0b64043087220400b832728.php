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
        $__internal_9171ee38652be97690284b95aaedcbe12e83929d0728909772e82815a01da685 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9171ee38652be97690284b95aaedcbe12e83929d0728909772e82815a01da685->enter($__internal_9171ee38652be97690284b95aaedcbe12e83929d0728909772e82815a01da685_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_d065f0eb7072f2b2c0310ac8705fd5b96c1f1ecca63fd2a1dd7a27ee864bd576 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d065f0eb7072f2b2c0310ac8705fd5b96c1f1ecca63fd2a1dd7a27ee864bd576->enter($__internal_d065f0eb7072f2b2c0310ac8705fd5b96c1f1ecca63fd2a1dd7a27ee864bd576_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_9171ee38652be97690284b95aaedcbe12e83929d0728909772e82815a01da685->leave($__internal_9171ee38652be97690284b95aaedcbe12e83929d0728909772e82815a01da685_prof);

        
        $__internal_d065f0eb7072f2b2c0310ac8705fd5b96c1f1ecca63fd2a1dd7a27ee864bd576->leave($__internal_d065f0eb7072f2b2c0310ac8705fd5b96c1f1ecca63fd2a1dd7a27ee864bd576_prof);

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