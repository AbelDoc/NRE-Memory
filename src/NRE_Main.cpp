    
    /**
     * @file NRE_Main.cpp
     * @brief Test of Memory's API
     * @author Louis ABEL
     * @date 14/03/2020
     * @copyright CC-BY-NC-SA
     */
     
    #define NRE_USE_MEMORY_MANAGER

    #include "Header/NRE_Memory.hpp"

    using namespace NRE::Memory;
    using namespace NRE::Utility;
    
    int main(int, char**) {
        Allocator<int> a;
        
        auto p = a.allocate(1);
        a.construct(p, 1234);
        
        std::cout << *p << std::endl;
        
        a.destroy(p);
        a.deallocate(p);
        
        return 0;
    }