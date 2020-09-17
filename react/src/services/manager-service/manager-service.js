import {
    Client,
    Team,
} from './entities';

class ManagerService
{
    clients() {
        return Client;
    }

    team() {
        return Team;
    }
}

export default ManagerService;