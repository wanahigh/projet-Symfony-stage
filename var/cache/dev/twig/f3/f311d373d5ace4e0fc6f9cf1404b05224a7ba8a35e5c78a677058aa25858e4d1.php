<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_2b615e761bfed31166d09958f6695559bc9e196820eff59d889af7db1bf40ec2 extends Twig_Template
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
        $__internal_efbf31a00572bd069b5a25e7b82dcb281b4a63257df7a770e1b39d1b1d8eee15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efbf31a00572bd069b5a25e7b82dcb281b4a63257df7a770e1b39d1b1d8eee15->enter($__internal_efbf31a00572bd069b5a25e7b82dcb281b4a63257df7a770e1b39d1b1d8eee15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_1f536a3240d1d50c3969c5b62d2d3163a77bafeec709b94bfdb99d91b24381be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f536a3240d1d50c3969c5b62d2d3163a77bafeec709b94bfdb99d91b24381be->enter($__internal_1f536a3240d1d50c3969c5b62d2d3163a77bafeec709b94bfdb99d91b24381be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_efbf31a00572bd069b5a25e7b82dcb281b4a63257df7a770e1b39d1b1d8eee15->leave($__internal_efbf31a00572bd069b5a25e7b82dcb281b4a63257df7a770e1b39d1b1d8eee15_prof);

        
        $__internal_1f536a3240d1d50c3969c5b62d2d3163a77bafeec709b94bfdb99d91b24381be->leave($__internal_1f536a3240d1d50c3969c5b62d2d3163a77bafeec709b94bfdb99d91b24381be_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
