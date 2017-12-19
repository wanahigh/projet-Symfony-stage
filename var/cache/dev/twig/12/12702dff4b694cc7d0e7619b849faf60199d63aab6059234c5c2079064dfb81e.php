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
        $__internal_b463968e65d5dbb2aec19ac06e135df6022c789c758a273bfaf335f3e0ebd07f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b463968e65d5dbb2aec19ac06e135df6022c789c758a273bfaf335f3e0ebd07f->enter($__internal_b463968e65d5dbb2aec19ac06e135df6022c789c758a273bfaf335f3e0ebd07f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_f59eb7d4981cf808537486ab61ed09b666000b2182632d58b32184d7832ca38b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f59eb7d4981cf808537486ab61ed09b666000b2182632d58b32184d7832ca38b->enter($__internal_f59eb7d4981cf808537486ab61ed09b666000b2182632d58b32184d7832ca38b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_b463968e65d5dbb2aec19ac06e135df6022c789c758a273bfaf335f3e0ebd07f->leave($__internal_b463968e65d5dbb2aec19ac06e135df6022c789c758a273bfaf335f3e0ebd07f_prof);

        
        $__internal_f59eb7d4981cf808537486ab61ed09b666000b2182632d58b32184d7832ca38b->leave($__internal_f59eb7d4981cf808537486ab61ed09b666000b2182632d58b32184d7832ca38b_prof);

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
