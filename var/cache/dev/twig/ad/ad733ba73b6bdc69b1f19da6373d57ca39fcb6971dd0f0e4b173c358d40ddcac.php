<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_b9dc98a3bda9ef98121bf0d94aa51adcfd170c868e0d08a9d33bae0824d9d63c extends Twig_Template
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
        $__internal_46f5449f3b75ec0e1ec768ccafef849462233301a471a437549f4378913ea656 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46f5449f3b75ec0e1ec768ccafef849462233301a471a437549f4378913ea656->enter($__internal_46f5449f3b75ec0e1ec768ccafef849462233301a471a437549f4378913ea656_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_636c1e65cebc595b1aad4a70a51d6b2aec9bbe58d15dfdf051f41e6b77a131dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_636c1e65cebc595b1aad4a70a51d6b2aec9bbe58d15dfdf051f41e6b77a131dd->enter($__internal_636c1e65cebc595b1aad4a70a51d6b2aec9bbe58d15dfdf051f41e6b77a131dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_46f5449f3b75ec0e1ec768ccafef849462233301a471a437549f4378913ea656->leave($__internal_46f5449f3b75ec0e1ec768ccafef849462233301a471a437549f4378913ea656_prof);

        
        $__internal_636c1e65cebc595b1aad4a70a51d6b2aec9bbe58d15dfdf051f41e6b77a131dd->leave($__internal_636c1e65cebc595b1aad4a70a51d6b2aec9bbe58d15dfdf051f41e6b77a131dd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
