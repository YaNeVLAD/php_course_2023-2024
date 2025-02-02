<?php
declare(strict_types=1);

namespace App\Service\Data;

class UserData
{
    public function __construct(
        private ?int $userId,
        private string $firstName,
        private string $lastName,
        private ?string $middleName,
        private string $gender,
        private \DateTimeImmutable $birthDate,
        private string $email,
        private ?string $phone,
        private ?string $avatarPath,
        private string $password,
        private int $role,
    ) {

    }

    //GET методы
    public function getId(): ?int
    {
        return $this->userId;
    }

    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function getLastName(): string
    {
        return $this->lastName;
    }

    public function getMiddleName(): ?string
    {
        return $this->middleName;
    }

    public function getGender(): string
    {
        return $this->gender;
    }
    public function getBirthDate(): \DateTimeImmutable
    {
        return $this->birthDate;
    }
    public function getEmail(): string
    {
        return $this->email;
    }
    public function getPhone(): ?string
    {
        return $this->phone;
    }
    public function getAvatarPath(): ?string
    {
        return $this->avatarPath;
    }

    public function getRole(): int
    {
        return $this->role;
    }

    public function getPassword(): string
    {
        return $this->password;
    }
}