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
        $__internal_49a15a853cd192be4d1af40b66510a3cc3516a9972adabc6e2ba0c3d2d7d9723 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49a15a853cd192be4d1af40b66510a3cc3516a9972adabc6e2ba0c3d2d7d9723->enter($__internal_49a15a853cd192be4d1af40b66510a3cc3516a9972adabc6e2ba0c3d2d7d9723_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_b9ebadd14cfde6dcab0cb71a78c2f68162595c6116e0acdc0c293fa97cadb54a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9ebadd14cfde6dcab0cb71a78c2f68162595c6116e0acdc0c293fa97cadb54a->enter($__internal_b9ebadd14cfde6dcab0cb71a78c2f68162595c6116e0acdc0c293fa97cadb54a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_49a15a853cd192be4d1af40b66510a3cc3516a9972adabc6e2ba0c3d2d7d9723->leave($__internal_49a15a853cd192be4d1af40b66510a3cc3516a9972adabc6e2ba0c3d2d7d9723_prof);

        
        $__internal_b9ebadd14cfde6dcab0cb71a78c2f68162595c6116e0acdc0c293fa97cadb54a->leave($__internal_b9ebadd14cfde6dcab0cb71a78c2f68162595c6116e0acdc0c293fa97cadb54a_prof);

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
