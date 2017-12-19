<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_3c91a58fb73f2e39eecca3c3988711d4fcd17476b413cced255703c7e475fbc6 extends Twig_Template
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
        $__internal_51629841b0846d7eb66ad4811bb92dac4de35fe96eb58a9f3d38927e32e7fcd6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51629841b0846d7eb66ad4811bb92dac4de35fe96eb58a9f3d38927e32e7fcd6->enter($__internal_51629841b0846d7eb66ad4811bb92dac4de35fe96eb58a9f3d38927e32e7fcd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_84e349f7fdbd266d30ade664af199a6b19ea183477756ac98d0013e67cb85c8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84e349f7fdbd266d30ade664af199a6b19ea183477756ac98d0013e67cb85c8f->enter($__internal_84e349f7fdbd266d30ade664af199a6b19ea183477756ac98d0013e67cb85c8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_51629841b0846d7eb66ad4811bb92dac4de35fe96eb58a9f3d38927e32e7fcd6->leave($__internal_51629841b0846d7eb66ad4811bb92dac4de35fe96eb58a9f3d38927e32e7fcd6_prof);

        
        $__internal_84e349f7fdbd266d30ade664af199a6b19ea183477756ac98d0013e67cb85c8f->leave($__internal_84e349f7fdbd266d30ade664af199a6b19ea183477756ac98d0013e67cb85c8f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
