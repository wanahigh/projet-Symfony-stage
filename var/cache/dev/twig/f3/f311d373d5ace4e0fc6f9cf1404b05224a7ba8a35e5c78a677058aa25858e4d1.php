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
        $__internal_35e3775260b310abfb784024b2d81429528d0f3a510bf417488940c6289dabb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35e3775260b310abfb784024b2d81429528d0f3a510bf417488940c6289dabb0->enter($__internal_35e3775260b310abfb784024b2d81429528d0f3a510bf417488940c6289dabb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_3f624e925413bc54928d9902551d01af6d581670941966e6f97361a734d4212b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f624e925413bc54928d9902551d01af6d581670941966e6f97361a734d4212b->enter($__internal_3f624e925413bc54928d9902551d01af6d581670941966e6f97361a734d4212b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_35e3775260b310abfb784024b2d81429528d0f3a510bf417488940c6289dabb0->leave($__internal_35e3775260b310abfb784024b2d81429528d0f3a510bf417488940c6289dabb0_prof);

        
        $__internal_3f624e925413bc54928d9902551d01af6d581670941966e6f97361a734d4212b->leave($__internal_3f624e925413bc54928d9902551d01af6d581670941966e6f97361a734d4212b_prof);

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
