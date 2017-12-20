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
        $__internal_902eb326e78c1d9fa2ca498e2865dfc5404c80fe9a2c1ff8a0d96b80a15f3322 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_902eb326e78c1d9fa2ca498e2865dfc5404c80fe9a2c1ff8a0d96b80a15f3322->enter($__internal_902eb326e78c1d9fa2ca498e2865dfc5404c80fe9a2c1ff8a0d96b80a15f3322_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_957c390e978171d8cced0d58591b19afa9bb7bbba0144a0ec3748323fc28f5d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_957c390e978171d8cced0d58591b19afa9bb7bbba0144a0ec3748323fc28f5d1->enter($__internal_957c390e978171d8cced0d58591b19afa9bb7bbba0144a0ec3748323fc28f5d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_902eb326e78c1d9fa2ca498e2865dfc5404c80fe9a2c1ff8a0d96b80a15f3322->leave($__internal_902eb326e78c1d9fa2ca498e2865dfc5404c80fe9a2c1ff8a0d96b80a15f3322_prof);

        
        $__internal_957c390e978171d8cced0d58591b19afa9bb7bbba0144a0ec3748323fc28f5d1->leave($__internal_957c390e978171d8cced0d58591b19afa9bb7bbba0144a0ec3748323fc28f5d1_prof);

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
