<?php

declare(strict_types=1);

namespace App\Model;


class Service
{
  public function __construct(
    public string $date,
    public int $duration,
    public Client $client,
    public Employee $employee
  )
  {
    
  }

  static public function listAll() 
  {
    return [
      new self(
        "2000-01-01", 10, new Client("Maria"), new Employee("José")
      ),
      new self(
        "2000-01-02", 12, new Client("Rui"), new Employee("José")
      ),
      new self(
        "2000-01-03", 14, new Client("Raquel"), new Employee("José")
      )            
    ];
  }


}