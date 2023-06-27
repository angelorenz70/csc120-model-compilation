{% extends 'documentation/base.php' %}

{% block content %}
        <!-- Masthead-->
        <header class="masthead text-light" style="background-image: url('{{url_for('static', filename='assets/image_docs/img_obstacle/obstacle4.jpeg')}}'); background-repeat: no-repeat; background-size: cover;">
            <div class="container">
                <div class="masthead-subheading">REINFORCEMENT LEARNING</div>
                <div class="masthead-heading text-uppercase">APPLICATION: AVOID OBSTACLE</div>
            </div>
        </header>
        <!-- Explanation-->
        <section class="page-section text-light" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Advancing Intelligent Navigation</h2>
                    <h3 class="section-subheading  ">Reinforcement learning is an effective approach to train agents in intelligently avoiding obstacles. 
                        By defining appropriate representations of the agent's environment, designing a suitable set of actions, and creating a rewarding 
                        system, RL algorithms can learn effective obstacle avoidance strategies. Evaluating the performance of these agents using metrics 
                        such as success rate, collision rate, efficiency, smoothness, and generalization provides valuable insights into their capabilities. 
                        This information helps guide further improvements in RL-based obstacle avoidance applications.</h3>
                </div>
                <ul class="timeline">
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{url_for('static', filename='assets/image_docs/img_obstacle/obstacle5.png')}}" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Applications</h4>
                            </div>
                            <div class="timeline-body"><p class=" ">Reinforcement learning applied to obstacle avoidance finds practical applications in various domains, such as robotics,
                                 autonomous vehicles, and virtual simulations. Through training agents using reinforcement learning techniques, it enables them to navigate intricate 
                                 environments and effectively steer clear of obstacles. This approach not only enhances safety but also empowers agents to make intelligent decisions, 
                                 ensuring efficient obstacle avoidance in dynamic and complex settings.</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{url_for('static', filename='assets/image_docs/img_obstacle/obstacle7.png')}}" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Action Space</h4>
                            </div>
                            <div class="timeline-body"><p class=" ">A continuous action space allows agents to make smooth and precise adjustments, offering fine-grained control over their actions. It enables them to navigate complex environments effectively but requires specialized techniques to handle the challenges of exploration and exploitation within an infinite range of possible actions.</p></div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{url_for('static', filename='assets/image_docs/img_obstacle/obstacle8.png')}}" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Observation Space</h4>
                            </div>
                            <div class="timeline-body"><p class=" ">Consists of the positions of the agent, the position of the coin, and the position of the obstacle in the environment. It provides information about the spatial coordinates of these entities, allowing the agent to perceive their locations relative to each other. Additionally, the distance between the agent and the coin is included in the observation space, offering a measure of proximity that helps the agent make informed decisions based on the relative distances between itself, the coin, and any obstacles present in the environment.</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{url_for('static', filename='assets/image_docs/img_obstacle/obstacle9.png')}}" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>PPO Policy</h4>
                            </div>
                            <div class="timeline-body"><p class=" ">In the Proximal Policy Optimization (PPO) algorithm, the observation space is designed to include the positions of the agent, the coin, and the obstacles present in the environment. This information plays a critical role in helping the agent understand their spatial relationships. Moreover, the observation space also takes into account the distance between the agent and the coin, which serves as a valuable measure of proximity. By considering these relative distances, the agent can make informed decisions to navigate the environment effectively, avoid obstacles, and reach the coin.</p></div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/3.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>//</h4>
                            </div>
                            <div class="timeline-body"><p class=" ">//</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                    <div class="timeline-image">
                            <h4>How 
                                <br/>
                                to Use 
                                <br/>
                                the Model?</h4>
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-body"><p class=" ">STEP 1: Go to home. <br> STEP 2: Click the container of the model. <br> The agent is chasing the coin while avoiding the obstacles. </p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <h4>
                                End
                                <br />
                                Of 
                                <br />
                                Discussion.
                            </h4>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <!-- Portfolio Grid-->
        <section class="page-section bg-light" id="portfolio" 
        style="background: rgb(63,94,251); background: radial-gradient(circle, rgba(192, 192, 192) 0%, rgba(0, 53, 128) 100%);">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">GRAPHS</h2>
                    <h3 class="section-subheading  ">Look at this graphs to know the metrics and evaluation of the model.</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                                <div class="portfolio-caption">
                                    <div class="portfolio-caption-heading">Hyperparameters</div>
                                    <div class="portfolio-caption-subheading  ">Graph 1</div>
                                </div>
                            </a>
                            
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 2-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal2">
                                <div class="portfolio-caption">
                                    <div class="portfolio-caption-heading">Neural Network Model</div>
                                    <div class="portfolio-caption-subheading  ">Graph 2</div>
                                </div>
                            </a>
                            
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 3-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal3">
                                <div class="portfolio-caption">
                                    <div class="portfolio-caption-heading">Trainer Configuration</div>
                                    <div class="portfolio-caption-subheading  ">Graph 3</div>
                                </div>
                            </a>
                            
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                        <!-- Portfolio item 4-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal4">
                                <div class="portfolio-caption">
                                    <div class="portfolio-caption-heading">Reward</div>
                                    <div class="portfolio-caption-subheading  ">Graph 4</div>
                                </div>
                            </a>
                            
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                        <!-- Portfolio item 5-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal5">
                                <div class="portfolio-caption">
                                    <div class="portfolio-caption-heading">Environment</div>
                                    <div class="portfolio-caption-subheading  ">Graph 5-7</div>
                                </div>
                            </a>
                           
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <!-- Portfolio item 6-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal6">
                                <div class="portfolio-caption">
                                    <div class="portfolio-caption-heading">Losses</div>
                                    <div class="portfolio-caption-subheading  ">Graph 8-11</div>
                                </div>
                            </a>
                           
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Portfolio Modals-->
        <!-- Portfolio item 1 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Hyperparameters</h2>
                                    <p>When it comes to Proximal Policy Optimization (PPO) and Soft Actor-Critic (SAC) algorithms, there are a few hyperparameters that they share in common. 
                                        The learning rate determines how fast the agent learns from its experiences, sort of like the speed at which it adapts to new information. 
                                        The entropy coefficient in SAC controls the balance between exploring new actions and exploiting learned knowledge. It's like a knob that adjusts 
                                        how much the agent values discovering new things versus sticking to what it knows. The discount factor, often called gamma, affects how much the 
                                        agent cares about future rewards compared to immediate rewards. It's like deciding how much patience the agent has in considering long-term gains. 
                                        PPO uses an advantage estimate, which is like a measure of how good the agent's actions were compared to what it expected. This helps in understanding 
                                        the direction for updating the policy. </p>
                                    <img class="img-fluid d-block mx-auto" src="{{url_for('static', filename='assets/image_docs/img_obstacle/rl docs/hyperparameters.png')}}" alt="..." />
                                    <p>When it comes to Proximal Policy Optimization (PPO) and Soft Actor-Critic (SAC) algorithms, there are a few hyperparameters that they share in common. The learning rate determines how fast the agent learns from its experiences, sort of like the speed at which it adapts to new information. The entropy coefficient in SAC controls the balance between exploring new actions and exploiting learned knowledge. It's like a knob that adjusts how much the agent values discovering new things versus sticking to what it knows. The discount factor, often called gamma, affects how much the agent cares about future rewards compared to immediate rewards. It's like deciding how much patience the agent has in considering long-term gains. PPO uses an advantage estimate, which is like a measure of how good the agent's actions were compared to what it expected. This helps in understanding the direction for updating the policy. </p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Graph 1</strong>
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 2 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Neural Network Model</h2>
                                    <p>In both Proximal Policy Optimization (PPO) and Soft Actor-Critic (SAC) algorithms, a neural network is typically employed to represent the policy 
                                        or value function. This neural network is usually designed with multiple layers, referred to as a deep neural network. Each layer consists of a 
                                        number of neurons that process and transform the input data. The configuration of the neural network commonly includes parameters such as the 
                                        number of layers, the number of neurons in each layer, and the activation functions used between layers. These choices impact the capacity and 
                                        complexity of the neural network, allowing it to capture the intricate patterns and representations required for learning and decision-making.</p>
                                    <img class="img-fluid d-block mx-auto" src="{{url_for('static', filename='assets/image_docs/img_obstacle/rl docs/network.png')}}" alt="..." />
                                    <p>In both Proximal Policy Optimization (PPO) and Soft Actor-Critic (SAC) algorithms, a neural network is typically employed to represent the policy or value function. This neural network is usually designed with multiple layers, referred to as a deep neural network. Each layer consists of a number of neurons that process and transform the input data. The configuration of the neural network commonly includes parameters such as the number of layers, the number of neurons in each layer, and the activation functions used between layers. These choices impact the capacity and complexity of the neural network, allowing it to capture the intricate patterns and representations required for learning and decision-making.</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Graph 2</strong>
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 3 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Trainer Configuration</h2>
                                    <p>The parameters you mentioned have specific roles in the context of reinforcement learning algorithms. "max_step" refers to the maximum number of steps or 
                                        interactions the agent will take during training. In this case, it is set to 0.5 million, indicating a predefined limit on the training duration. "time_horizon" 
                                        determines the number of steps the agent considers as a single trajectory before updating its policy. A value of 64 means the agent updates its policy every 64 
                                        steps. "summary_freq" specifies how often the algorithm collects and logs summary information, such as rewards or losses. In this case, it occurs every 10,000 
                                        steps. "keep_checkpoints" is the number of recent checkpoints the algorithm saves for backup or analysis purposes, with 5 indicating the storage of the five most 
                                        recent checkpoints. "checkpoint_interval" indicates the frequency at which the algorithm saves a checkpoint, allowing for later model restoration or evaluation. 
                                        In this case, it occurs every 1,000 steps. The "threaded" parameter determines whether the algorithm uses multiple threads for parallel execution. If set to "false," 
                                        the algorithm runs in a single thread. "init_path" specifies the path to an initial model or checkpoint for the algorithm to start from, and in this case, it is set to 
                                        null, indicating no initial model is provided. These parameter values are crucial for controlling and fine-tuning the behavior and performance of the reinforcement 
                                        learning algorithm in various tasks and environments.</p>
                                    <img class="img-fluid d-block mx-auto" src="{{url_for('static', filename='assets/image_docs/img_obstacle/rl docs/Trainer Configuration Common to all trainers.png')}}" alt="..." />
                                    <p>The parameters you mentioned have specific roles in the context of reinforcement learning algorithms. "max_step" refers to the maximum number of steps or interactions the agent will take during training. In this case, it is set to 0.5 million, indicating a predefined limit on the training duration. "time_horizon" determines the number of steps the agent considers as a single trajectory before updating its policy. A value of 64 means the agent updates its policy every 64 steps. "summary_freq" specifies how often the algorithm collects and logs summary information, such as rewards or losses. In this case, it occurs every 10,000 steps. "keep_checkpoints" is the number of recent checkpoints the algorithm saves for backup or analysis purposes, with 5 indicating the storage of the five most recent checkpoints. "checkpoint_interval" indicates the frequency at which the algorithm saves a checkpoint, allowing for later model restoration or evaluation. In this case, it occurs every 1,000 steps. The "threaded" parameter determines whether the algorithm uses multiple threads for parallel execution. If set to "false," the algorithm runs in a single thread. "init_path" specifies the path to an initial model or checkpoint for the algorithm to start from, and in this case, it is set to null, indicating no initial model is provided. These parameter values are crucial for controlling and fine-tuning the behavior and performance of the reinforcement learning algorithm in various tasks and environments.</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Graph 3</strong>
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 4 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Reward</h2>
                                    <p>//</p>
                                    <img class="img-fluid d-block mx-auto" src="{{url_for('static', filename='assets/image_docs/img_obstacle/rl docs/reward.png')}}" alt="..." />
                                    <p>//</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Graph 4</strong>
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 5 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Environment</h2>
                                    <p>//</p>
                                    <img class="img-fluid d-block mx-auto" src="{{url_for('static', filename='assets/image_docs/img_obstacle/rl docs/Environment_Cumulative Reward hist.png')}}" alt="..." />
                                    <p>//</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Graph 5</strong>
                                        </li>
                                    </ul>
                                    <p>//</p>
                                    <img class="img-fluid d-block mx-auto" src="{{url_for('static', filename='assets/image_docs/img_obstacle/rl docs/Environment_Cumulative Reward.png')}}" alt="..." />
                                    <p>//</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Graph 6</strong>
                                        </li>
                                    </ul>
                                    <img class="img-fluid d-block mx-auto" src="{{url_for('static', filename='assets/image_docs/img_obstacle/rl docs/Environment__Episode Length.png')}}" alt="..." />
                                    <p>//</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Graph 7</strong>
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 6 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Losses</h2>
                                    <p>//</p>
                                    <img class="img-fluid d-block mx-auto" src="{{url_for('static', filename='assets/image_docs/img_obstacle/rl docs/Losses_GAIL Loss.png')}}" alt="..." />
                                    <p>//</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Graph 8</strong>
                                        </li>
                                    </ul>
                                    <p>//</p>
                                    <img class="img-fluid d-block mx-auto" src="{{url_for('static', filename='assets/image_docs/img_obstacle/rl docs/Losses_Policy Loss.png')}}" alt="..." />
                                    <p>//</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Graph 9</strong>
                                        </li>
                                    </ul>
                                    <p>//</p>
                                    <img class="img-fluid d-block mx-auto" src="{{url_for('static', filename='assets/image_docs/img_obstacle/rl docs/Losses_Pretraining Loss.png')}}" alt="..." />
                                    <p>//</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Graph 10</strong>
                                        </li>
                                    </ul>
                                    <p>//</p>
                                    <img class="img-fluid d-block mx-auto" src="{{url_for('static', filename='assets/image_docs/img_obstacle/rl docs/Losses_Value Loss.png')}}" alt="..." />
                                    <p>//</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Graph 11</strong>
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
{% endblock %}
