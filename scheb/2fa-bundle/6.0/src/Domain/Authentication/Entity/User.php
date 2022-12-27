<?php

declare(strict_types=1);

namespace Domain\Authentication\Entity;

use Domain\Shared\Entity\{AbstractEntity, IdentityTrait, TimestampTrait};
use Scheb\TwoFactorBundle\Model\BackupCodeInterface as BackupCodesTwoFactor;
use Scheb\TwoFactorBundle\Model\Email\TwoFactorInterface as EmailTwoFactor;
use Scheb\TwoFactorBundle\Model\Google\TwoFactorInterface as GoogleTwoFactor;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * Class User
 *
 * @author bernard-ng <bernard@devscast.tech>
 */
class User extends AbstractEntity implements UserInterface, PasswordAuthenticatedUserInterface, GoogleTwoFactor, EmailTwoFactor, BackupCodesTwoFactor
{
    use TwoFactorTrait;
}
