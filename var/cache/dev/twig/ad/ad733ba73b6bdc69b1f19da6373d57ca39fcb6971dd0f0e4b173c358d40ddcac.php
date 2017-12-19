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
        $__internal_2a33f584202ab25acb9cd35e37a2fdb4f7dd0a950f2655a38f8950fd2d08337d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a33f584202ab25acb9cd35e37a2fdb4f7dd0a950f2655a38f8950fd2d08337d->enter($__internal_2a33f584202ab25acb9cd35e37a2fdb4f7dd0a950f2655a38f8950fd2d08337d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_dd16f9cfdfc362bcf109b5e9c96eafc8b3afd6a037531e5f96ef8de3e1643e2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd16f9cfdfc362bcf109b5e9c96eafc8b3afd6a037531e5f96ef8de3e1643e2c->enter($__internal_dd16f9cfdfc362bcf109b5e9c96eafc8b3afd6a037531e5f96ef8de3e1643e2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_2a33f584202ab25acb9cd35e37a2fdb4f7dd0a950f2655a38f8950fd2d08337d->leave($__internal_2a33f584202ab25acb9cd35e37a2fdb4f7dd0a950f2655a38f8950fd2d08337d_prof);

        
        $__internal_dd16f9cfdfc362bcf109b5e9c96eafc8b3afd6a037531e5f96ef8de3e1643e2c->leave($__internal_dd16f9cfdfc362bcf109b5e9c96eafc8b3afd6a037531e5f96ef8de3e1643e2c_prof);

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
