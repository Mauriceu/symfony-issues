<?php

namespace App\Entity;

use Symfony\Component\Security\Core\User\UserInterface;

class User implements UserInterface
{
		private ?string $userIdentifier = null;
		private ?string $password = null;
		private array $roles = [];

		public function getRoles(): array
		{
				return ["ROLE_USER"];
		}

		public function setRoles(array $roles): void
		{
				$this->roles = $roles;
		}

		public function eraseCredentials(): void
		{
		}

		public function getUserIdentifier(): string
		{
				return "test";
		}

		public function setUserIdentifier(?string $userIdentifier): void
		{
				$this->userIdentifier = $userIdentifier;
		}

		public function getPassword(): ?string
		{
				return $this->password;
		}

		public function setPassword(?string $password): void
		{
				$this->password = $password;
		}
}