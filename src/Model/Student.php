<?php

namespace Cespess\Web\Model;

/**
 * @Entity
 * @Table(name="students")
 */
class Student {

  /**
   * @Id
   * @Column(type="integer")
   * @GeneratedValue
   */
  public $id;

  /** @Column(type="string", name="first_name") */
  public $firstName;

  /** @Column(type="string", name="last_name") */
  public $lastName;

  /** @Column(type="string") */
  public $email;

  /** @Column(type="string") */
  public $password;

  ///** @Column(type="datetime", name="created_at") */
  //public $createdAt;

}


