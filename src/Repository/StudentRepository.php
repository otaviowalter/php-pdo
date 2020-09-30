<?php


namespace Alura\Pdo\Repository;


use Alura\Pdo\Domain\Model\Student;

interface StudentRepository
{
    public function allStudents(): array;
    public function studentsWithPhones(): array;
    public function studentsBirthAt(\DateTimeImmutable $birthDate): array;
    public function save(Student $student): bool;
    public function remove(Student $student): bool;
}